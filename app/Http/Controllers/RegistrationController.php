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
       $request->validate([
            'name_participant' => ['required'],
            'email' => ['required'],
            'school' => ['required'],
            'activities' => ['required'],
            'position' => ['required'],
            'district' => ['required'],
            'par_image' => ['required', 'mimes:jpeg,png,jpgmax:10000'],
            'co_image' => ['mimes:jpeg,png,jpg|max:10000'],
            'name_coach' => ['required'],
        ]);
        
        $registration = new Registration();

        $newImagePar = time(). '-' . $request->name_participant. '.'. $request->par_image->extension();
        $request->par_image->move(public_path('homeAssets'), $newImagePar);
        
        $newImageCo = time(). '-' . $request->name_coach. '.'. $request->co_image->extension();
        $request->co_image->move(public_path('homeAssets'), $newImageCo);

        $registration->name_participant = $request->name_participant;
        $registration->email = $request->email;
        $registration->position = $request->position;
        $registration->school = $request->school;
        $registration->district = $request->district;
        $registration->name_coach = $request->name_coach;
        $registration->activities = $request->activities;
        $registration->par_image = $newImagePar;
        $registration->co_image = $newImageCo;
        $registration->status = 'Not Attended';

        if($registration->save()){
            Alert::success('Success', 'Registered Succesfully');
            return redirect()->back();
        }else{
            return redirect()->back()->with('error', 'Failed to Register');
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

    public function openingAttendance(){
        $registration = Registration::where('activities', 'Opening Program/Contest Orientation')->get();
        return view('dashboards.admins.openingAttendance', compact('registration'));
    }

    public function kamustahan(){
        $registration = Registration::where('activities', 'ICT - KAMUSTAHAN')->get();
        return view('dashboards.admins.kamustahan', compact('registration'));
    }

    public function handout(){
        $registration = Registration::where('activities', 'On the Spot Hand-out Making (Elem)')->get();
        return view('dashboards.admins.handout', compact('registration'));
    }

    public function handoutAttendance(){
        $registration = Registration::where('activities', 'On the Spot Hand-out Making (Elem)')->get();
        return view('dashboards.admins.handoutAttendance', compact('registration'));
    }

    public function closing(){
        $registration = Registration::where('activities', 'Closing Program/Awarding Ceremony')->get();
        return view('dashboards.admins.closing', compact('registration'));
    }

    public function closingAttendance(){
        $registration = Registration::where('activities', 'Closing Program/Awarding Ceremony')->get();
        return view('dashboards.admins.closingAttendance', compact('registration'));
    }

    public function slidejhs(){
        $registration = Registration::where('activities', 'On the Spot Slide Presentation (JHS)')->get();
        return view('dashboards.admins.slidejhs', compact('registration'));
    }

    public function slidejhsAttendance(){
        $registration = Registration::where('activities', 'On the Spot Slide Presentation (JHS)')->get();
        return view('dashboards.admins.slidejhsAttendance', compact('registration'));
    }

    public function viddoc(){
        $registration = Registration::where('activities', 'Video Documentary (SHS)')->get();
        return view('dashboards.admins.viddoc', compact('registration'));
    }

    public function viddocAttendance(){
        $registration = Registration::where('activities', 'Video Documentary (SHS)')->get();
        return view('dashboards.admins.viddocAttendance', compact('registration'));
    }

    public function plenS(){
        $registration = Registration::where('activities', 'Virtual Plenary Session (Students)')->get();
        return view('dashboards.admins.plens', compact('registration'));
    }

    public function plenSAttendance(){
        $registration = Registration::where('activities', 'Virtual Plenary Session (Students)')->get();
        return view('dashboards.admins.plensAttendance', compact('registration'));
    }

    public function plenT(){
        $registration = Registration::where('activities', 'Virtual Plenary Session (Teachers)')->get();
        return view('dashboards.admins.plent', compact('registration'));
    }

    public function plenTAttendance(){
        $registration = Registration::where('activities', 'Virtual Plenary Session (Teachers)')->get();
        return view('dashboards.admins.plentAttendance', compact('registration'));
    }

    public function demo(){
        $registration = Registration::where('activities', 'Live Demo Teaching')->get();
        return view('dashboards.admins.demo', compact('registration'));
    }

    public function demoAttendance(){
        $registration = Registration::where('activities', 'Live Demo Teaching')->get();
        return view('dashboards.admins.demoAttendance', compact('registration'));
    }

    public function lesson(){
        $registration = Registration::where('activities', 'Video Lesson Making')->get();
        
        return view('dashboards.admins.lesson', compact('registration'));
    }

    public function lessonAttendance(){
        $registration = Registration::where('activities', 'Video Lesson Making')->get();
        return view('dashboards.admins.lessonAttendance', compact('registration'));
    }

    public function google(){
        $registration = Registration::where('activities', 'Google App Mash-Up')->get();
        return view('dashboards.admins.google', compact('registration'));
    }

    public function googleAttendance(){
        $registration = Registration::where('activities', 'Google App Mash-Up')->get();
        return view('dashboards.admins.googleAttendance', compact('registration'));
    }

    public function sdo(){
        $registration = Registration::where('activities', 'SDO - Tuguegarao City ID AvP Making')->get();
        
        return view('dashboards.admins.sdo', compact('registration'));
    }

    public function sdoAttendance(){
        $registration = Registration::where('activities', 'SDO - Tuguegarao City ID AvP Making')->get();
        return view('dashboards.admins.sdoAttendance', compact('registration'));
    }

    public function national(){
        $registration = Registration::where('activities', 'National Anthem AvP Making')->get();
        
        return view('dashboards.admins.national', compact('registration'));
    }

    public function nationalAttendance(){
        $registration = Registration::where('activities', 'National Anthem AvP Making')->get();
        return view('dashboards.admins.nationalAttendance', compact('registration'));
    }

    public function digital(){
        $registration = Registration::where('activities', 'Digital Banner Making')->get();
        return view('dashboards.admins.digital', compact('registration'));
    }

    public function digitalAttendance(){
        $registration = Registration::where('activities', 'Digital Banner Making')->get();
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
    
    public function kamustahanAttendance(){
        $registration = Registration::where('activities', 'ICT - KAMUSTAHAN')->get();
        return view('dashboards.admins.kamustahanAttendance', compact('registration'));
    }

    public function statusEdit($id)
    {
        $registration = Registration::find($id);
        return view('dashboards.admins.edit', compact('registration'));
    }

    public function statusUpdate(Request $request, $id)
    {
        $registration = Registration::find($id);
        $registration->status =  $request->get('status');
        $registration->save();
        Alert::success('Success', 'Updated Succesfully');
        return redirect()->back();
    }
}
