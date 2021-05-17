<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name_participant' => 'required',
            'email' => 'required',
            'school' => 'required',
            'activities' => 'required',
            'position' => 'required',
            'district' => 'required',
            'par_image' => 'required|mimes:jpeg,png,jpg|max:10000',
            'co_image' => 'mimes:jpeg,png,jpg|max:10000',
            'name_coach' => 'required',
        ]);

        $newImagePar = time(). '-' . $request->name_participant. '.'. $request->par_image->extension();
        $request->par_image->move(public_path('homeAssets'), $newImagePar);
        
        $newImageCo = time(). '-' . $request->name_coach. '.'. $request->co_image->extension();
        $request->co_image->move(public_path('homeAssets'), $newImageCo);

        if($validator->failed()){
            Alert::error('Error!', $validator->messages()->first());
            return redirect('/registration');
        }
        else {
            Registration::create([
                'name_participant' => $request->input('name_participant'),
                'email' => $request->input('email'),
                'school' => $request->input('school'),
                'district' => $request->input('district'),
                'activities' => $request->input('activities'),
                'position' => $request->input('position'),
                'par_image' => $newImagePar,
                'co_image' => $newImageCo,
                'status' => 'Not Attended',
                'name_coach' => $request->input('name_coach'),
            ]);
            Alert::success('Success', 'Registered Succesfully');
            return redirect('/registration');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function exportView(Request $request){
        $registration = DB::table('registration');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Show" class="show btn btn-warning btn-sm showUser">Show</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser">Edit</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>
                
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.export', compact('registration'));
    }

    public function adminView(){
        $count = DB::table('registration')->count();
        
        return view('dashboards.admins.index', compact('count'));
    }


    public function opening(){
        $registration = Registration::where('activities', 'Opening Program/Contest Orientation')->get();
        return view('dashboards.admins.opening', compact('registration'));
    }

    public function openingAttendance(Request $request){
        $registration = DB::table('registration')->where('activities', 'Opening Program/Contest Orientation');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Update" class="btn btn-primary btn-sm editParticipant">Update</a>
                
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.openingAttendance', compact('registration'));
    }

    public function kamustahan(Request $request){
        $registration = DB::table('registration')->where('activities', 'ICT - KAMUSTAHAN');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
               
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Update" class="btn btn-primary btn-sm editParticipant">Update</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.kamustahan', compact('registration'));
    }

    public function handout(Request $request){
        $registration = DB::table('registration')->where('activities', 'On the Spot Hand-out Making (Elem)');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Show" class="show btn btn-warning btn-sm showUser">Show</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser">Edit</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.handout', compact('registration'));
    }

    public function handoutAttendance(Request $request){
        $registration = DB::table('registration')->where('activities', 'On the Spot Hand-out Making (Elem)');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Update" class="btn btn-primary btn-sm editParticipant">Update</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.handoutAttendance', compact('registration'));
    }

    public function closing(){
        $registration = Registration::where('activities', 'Closing Program/Awarding Ceremony');
        return view('dashboards.admins.closing', compact('registration'));
    }

    public function closingAttendance(Request $request){
        $registration = DB::table('registration')->where('activities', 'Closing Program/Awarding Ceremony');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Update" class="btn btn-primary btn-sm editParticipant">Update</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.closingAttendance', compact('registration'));
    }

    public function slidejhs(Request $request){
        $registration = DB::table('registration')->where('activities', 'On the Spot Slide Presentation (JHS)');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Show" class="show btn btn-warning btn-sm showUser">Show</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser">Edit</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.slidejhs', compact('registration'));
    }

    public function slidejhsAttendance(Request $request){
        $registration = DB::table('registration')->where('activities', 'On the Spot Slide Presentation (JHS)');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Update" class="btn btn-primary btn-sm editParticipant">Update</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.slidejhsAttendance', compact('registration'));
    }

    public function viddoc(Request $request){
        $registration = DB::table('registration')->where('activities', 'Video Documentary (SHS)');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Show" class="show btn btn-warning btn-sm showUser">Show</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser">Edit</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.viddoc', compact('registration'));
    }

    public function viddocAttendance(Request $request){
        $registration = DB::table('registration')->where('activities', 'Video Documentary (SHS)');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Update" class="btn btn-primary btn-sm editParticipant">Update</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.viddocAttendance', compact('registration'));
    }

    public function plenS(Request $request){
        $registration = DB::table('registration')->where('activities', 'Virtual Plenary Session (Students)');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Show" class="show btn btn-warning btn-sm showUser">Show</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser">Edit</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.plens', compact('registration'));
    }

    public function plenSAttendance(Request $request){
        $registration = DB::table('registration')->where('activities', 'Virtual Plenary Session (Students)');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Update" class="btn btn-primary btn-sm editParticipant">Update</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.plensAttendance', compact('registration'));
    }

    public function plenT(Request $request){
        $registration = DB::table('registration')->where('activities', 'Virtual Plenary Session (Teachers)');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Show" class="show btn btn-warning btn-sm showUser">Show</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser">Edit</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.plent', compact('registration'));
    }

    public function plenTAttendance(Request $request){
        $registration = DB::table('registration')->where('activities', 'Virtual Plenary Session (Teachers)');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Update" class="btn btn-primary btn-sm editParticipant">Update</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.plentattendance', compact('registration'));
    }

    public function demo(Request $request){
        $registration = DB::table('registration')->where('activities', 'Live Demo Teaching');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Show" class="show btn btn-warning btn-sm showUser">Show</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser">Edit</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.demo', compact('registration'));
    }

    public function demoAttendance(Request $request){
        $registration = DB::table('registration')->where('activities', 'Live Demo Teaching');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Update" class="btn btn-primary btn-sm editParticipant">Update</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.demoAttendance', compact('registration'));
    }

    public function lesson(Request $request){
        $registration = DB::table('registration')->where('activities', 'Video Lesson Making');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Show" class="show btn btn-warning btn-sm showUser">Show</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser">Edit</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.lesson', compact('registration'));
    }

    public function lessonAttendance(Request $request){
        $registration = DB::table('registration')->where('activities', 'Video Lesson Making');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Update" class="btn btn-primary btn-sm editParticipant">Update</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.lessonAttendance', compact('registration'));
    }

    public function google(Request $request){
        $registration = DB::table('registration')->where('activities', 'Google App Mash-Up');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Show" class="show btn btn-warning btn-sm showUser">Show</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser">Edit</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.google', compact('registration'));
    }

    public function googleAttendance(Request $request){
        $registration = DB::table('registration')->where('activities', 'Google App Mash-Up');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Update" class="btn btn-primary btn-sm editParticipant">Update</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.googleAttendance', compact('registration'));
    }

    public function sdo(Request $request){
        $registration = DB::table('registration')->where('activities', 'SDO - Tuguegarao City ID AvP Making');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Show" class="show btn btn-warning btn-sm showUser">Show</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser">Edit</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.sdo', compact('registration'));
    }

    public function sdoAttendance(Request $request){
        $registration = DB::table('registration')->where('activities', 'SDO - Tuguegarao City ID AvP Making');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Update" class="btn btn-primary btn-sm editParticipant">Update</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.sdoAttendance', compact('registration'));
    }

    public function national(Request $request){
        $registration = DB::table('registration')->where('activities', 'National Anthem AvP Making');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Show" class="show btn btn-warning btn-sm showUser">Show</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser">Edit</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.national', compact('registration'));
    }

    public function nationalAttendance(Request $request){
        $registration = DB::table('registration')->where('activities', 'National Anthem AvP Making');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Update" class="btn btn-primary btn-sm editParticipant">Update</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.nationalAttendance', compact('registration'));
    }

    public function digital(Request $request){
        $registration = DB::table('registration')->where('activities', 'Digital Banner Making');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Show" class="show btn btn-warning btn-sm showUser">Show</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser">Edit</a>
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.digital', compact('registration'));
    }

    public function digitalAttendance(Request $request){
        $registration = DB::table('registration')->where('activities', 'Digital Banner Making');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Update" class="btn btn-primary btn-sm editParticipant">Update</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.digitalAttendance', compact('registration'));
    }


    public function updateRegistration(Request $request)
    {
        Registration::updateOrCreate(
            ['id' => $request->user_id],
            ['status' => $request->status]
        );
        Alert::success('Success', 'Updated Succesfully');
        return response()->json(['success' => 'User saved successfully.']);
    
    }

    public function editRegistration($id)
    {  
        $registration = DB::table('registration')->find($id);
        return response()->json($registration);
    }
    
    public function kamustahanAttendance(Request $request){
        $registration = DB::table('registration')->where('activities', 'ICT - KAMUSTAHAN');
        if ($request->ajax()) {
            $data = $registration;
            return Datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
               
                $btn = '
                <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Update" class="btn btn-primary btn-sm editParticipant">Update</a>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('dashboards.admins.kamustahanAttendance', compact('registration'));
    }

    
}
