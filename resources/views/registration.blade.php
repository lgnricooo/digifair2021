<!DOCTYPE html>
<head>
  <title>ICT Unit - Division of Tuguegarao City</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->

  
  <link rel="shortcut icon" href="{{asset('/homeAssets/images/ictu.png')}}">

  <!-- plugin css -->
  <link href="{{asset('design/assets/fonts/feather-font/css/iconfont.css')}}" rel="stylesheet" />
  <link href="{{asset('design/assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" />
  <!-- end plugin css -->

  
  <!-- common css -->
  <link href="{{asset('design/css/app.css')}}" rel="stylesheet" />
  <!-- end common css -->
  

  </head>
<body >
<div class="main-wrapper" id="app" style="margin-top:0px">
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">
            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-8 col-xl-9 mx-auto">
                    <div class="card">
                        <div class="row">
                             <div class="col-md-4 pr-md-0">
                                <div class="auth-left-wrapper" style="background-image: url('{{asset('/homeAssets/images/ictu.png')}}');height:100 1 0 1">

                                </div>
                            </div>
                             <div class="col-md-8 pl-md-0">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <a href="#" class="noble-ui-logo d-block mb-2">ICTU - <span>DIGIFAIR 2021</span></a>
                                    <h5 class="text-muted font-weight-normal mb-4">Registration</h5>
                                    <form method="post" action="{{route('create.registered')}}" enctype="multipart/form-data">
                                    @if ( Session::get('error'))
                                        <div class="alert alert-danger">
                                                {{Session::get('error')}}
                                        </div>
                                    @endif
                                    @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address:</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" required>
                                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Name of Participant:</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Name" name="name_participant" required>
                                            <span class="text-danger">@error('name_participant'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="position">Position:</label>
                                            <select class="form-control" id="position" name="position" required>
                                                <option>Select Position</option>
                                                <option value="Teacher">Teacher</option>
                                                <option value="Coach">Coach</option>
                                                <option value="TWG Member">TWG Member</option>
                                                <option value="Student">Student</option>
                                                <option value="ALS Teacher">ALS Teacher</option>
                                                <option value="ALS Student">ALS Student</option>
                                                <option value="Higher Position">Higher Postions (<i>exp. School Heads/ASDS/SDS</i>)</option>
                                            </select>
                                            <span class="text-danger">@error('position'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="school">School:</label>
                                            <select class="form-control" id="school" name="school" required>
                                                <option>Select School</option>
                                                <option disabled>-----------North District-------------</option>
                                                <option value="Tuguegararo North Central School">Tuguegararo North Central School</option>
                                                <option value="Pallua Elementary School">Pallua Elementary School</option>
                                                <option value="Caritan Norte Elementary School">Caritan Norte Elementary School</option>
                                                <option value="Atulayan Elementary Schoo">Atulayan Elementary School</option>
                                                <option value="Annafunan Integrated School (Elem)">Annafunan Integrated School (Elem)</option>
                                                <option value="Bagay Elementary School">Bagay Elementary School</option>
                                                <option disabled>-----------NorthEast District-------------</option>
                                                <option value="Carig Integrated School (Elem)">Carig Integrated School (Elem)</option>
                                                <option value="Carig Norte School (Elem">Carig Norte School (Elem)</option>
                                                <option value="Caritan Norte Elementary School">Caritan Norte Elementary School</option>
                                                <option value="Linao Elementary School">Linao Elementary School</option>
                                                <option value="Larion Bajo Elementary School">Larion Bajo Elementary School</option>
                                                <option value="Larion Alto Elementary School">Larion Alto Elementary School</option>
                                                <option value="Balzain Elementary Schoo">Balzain Elementary School</option>
                                                <option value="Tuguegarao NorthEast Central School">Tuguegarao NorthEast Central School</option>
                                                <option value="Pengue Ruyu Elementary School">Pengue Ruyu Elementary School</option>
                                                <option disabled>-----------East District-------------</option>
                                                <option value="Tuguegararo East Central School">Tuguegararo East Central School</option>
                                                <option value="Tagga-Dadda Elementary School">Tagga-Dadda Elementary School</option>
                                                <option value="Dadda Elementary School">Dadda Elementary School</option>
                                                <option value="Capatan Integrated School (Elem)">Capatan Integrated School (Elem)</option>
                                                <option value="Namabbalan Integrated School (Elem)">Namabbalan Integrated School (Elem)</option>
                                                <option value="Libag Integrated School (Elem)">Libag Integrated School (Elem)</option>
                                                <option value="Gosi Elementary School">Gosi Elementary School</option>
                                                <option disabled>-----------West District-------------</option>
                                                <option value="Buntun Elementary School">Buntun Elementary School</option>
                                                <option value="Ugac Elementary School">Ugac Elementary School</option>
                                                <option value="San Gabriel Elementary School">San Gabriel Elementary School</option>
                                                <option value="Cataggaman Nuevo Elementary Schoo">Cataggaman Nuevo Elementary School</option>
                                                <option value="Cataggaman Pardo Elementary School">Cataggaman Pardo Elementary School</option>
                                                <option value="Cataggaman Elementary School">Cataggaman Elementary School</option>
                                                <option value="Tuguegarao West Central School">Tuguegarao West Central School</option>
                                                <option disabled>-----------JHS/SHS-------------</option>
                                                <option value="Cagayan National High School (JHS)">Cagayan National High School (JHS)</option>
                                                <option value="Cagayan National High School (SHS)">Cagayan National High School (SHS)</option>
                                                <option value="Cataggaman National High School (JHS)">Cataggaman National High School (JHS)</option>
                                                <option value="Cataggaman National High School (SHS)">Cataggaman National High School (SHS)</option>
                                                <option value="Linao National High School (JHS)">Linao National High School (JHS)</option>
                                                <option value="Linao National High School (SHS)">Linao National High School (SHS)</option>
                                                <option value="Gosi National High School (JHS)">Gosi National High School (JHS)</option>
                                                <option value="Gosi National High School (SHS)">Gosi National High School (SHS)</option>
                                                <option value="Tuguegarao City West High School (JHS)">Tuguegarao City West High School (JHS)</option>
                                                <option value="Tuguegarao City West High School (SHS)">Tuguegarao City West High School (SHS)</option>
                                                <option value="Tuguegarao City Science High School (JHS)">Tuguegarao City Science High School (JHS)</option>
                                                <option value="Tuguegarao City Science High School (SHS)">Tuguegarao City Science High School (SHS)</option>
                                                <option value="Annafunan Integrated School (JHS)">Annafunan Integrated School (JHS)</option>
                                                <option value="Capatan Integrated School (JHS)">Capatan Integrated School (JHS)</option>
                                                <option value="Namabbalan Integrated School (JHS)">Namabbalan Integrated School (JHS)</option>
                                                <option value="Libag Integrated School (JHS)">Libag Integrated School (JHS)</option>
                                                <option value="Carig Integrated School (JHS)">Carig Integrated School (JHS)</option>
                                                <option disabled>-----------ALS-------------</option>
                                                <option value="Alternative Learning System (ALS)">Alternative Learning System (ALS)</option>
                                                <option disabled>-----------Private Schools-------------</option>
                                                <option value="Univercity of Saint Louis (Elem)">Univercity of Saint Louis (Elem)</option>
                                                <option value="Univercity of Saint Louis (SHS)">Univercity of Saint Louis (SHS)</option>
                                                <option value="Univercity of Saint Louis (JHS)">Univercity of Saint Louis (JHS)</option>
                                                <option value="St. Paul University Philippines (Elem)">St. Paul University Philippines (Elem)</option>
                                                <option value="St. Paul University Philippines (JHS)">St. Paul University Philippines (JHS)</option>
                                                <option value="St. Paul University Philippines (SHS)">St. Paul University Philippines (SHS)</option>
                                                <option value="University of Cagayan Valley (Elem)">University of Cagayan Valley (Elem)</option>
                                                <option value="University of Cagayan Valley (JHS)">University of Cagayan Valley (JHS)</option>
                                                <option value="University of Cagayan Valley (SHS)">University of Cagayan Valley (SHS)</option>
                                                <option value="John Westley College (Elem)">John Westley College (Elem)</option>
                                                <option value="John Westley College (JHS)">John Westley College (JHS)</option>
                                                <option value="John Westley College (SHS)">John Westley College (SHS)</option>
                                                <option value="Methodist Christian School">Methodist Christian School</option>
                                                <option value="Montessori De Cagayan">Montessori De Cagayan</option>
                                            </select>
                                            <span class="text-danger">@error('school'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="district">District:</label>
                                            <select class="form-control" id="district" name="district" required="">
                                                <option>Select District</option>
                                                <option value="Tuguegararo North District">Tuguegararo North District</option>
                                                <option value="Tuguegararo West District">Tuguegararo West District</option>
                                                <option value="Tuguegararo East District">Tuguegararo East District</option>
                                                <option value="Tuguegararo NorthEast District">Tuguegararo NorthEast District</option>
                                            </select>
                                            <span class="text-danger">@error('district'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Name of Coach:</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Name" name="name_coach">
                                            <p><i>Note: If STUDENT, indicate Coach's Complete Name</i></p>
                                            <p><i>Note: If not STUDENT, put N/A</i></p>
                                            <span class="text-danger">@error('name_coach'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="activities">Activities:</label>
                                            <select class="form-control" id="activities" name="activities" required>
                                                <option>Select Activity</option>
                                                <option disabled>-----------Day 1-------------</option>
                                                <option value="Opening Program/Contest Orientation">Opening Program/Contest Orientation</option>
                                                <option value="ICT - KAMUSTAHAN">ICT - KAMUSTAHAN (ICT Coordinators only)</option>
                                                <option disabled>-----------Day 2-------------</option>
                                                <option value="On the Spot Hand-out Making (Elem)">On the Spot Hand-out Making (Elem)</option>
                                                <option value="On the Spot Slide Presentation (JHS)">On the Spot Slide Presentation (JHS)</option>
                                                <option value="Video Documentary (SHS)">Video Documentary (SHS)</option>
                                                <option value="Virtual Plenary Session (Students)">Virtual Plenary Session (Students)</option>
                                                <option value="Virtual Plenary Session (Teachers)">Virtual Plenary Session (Teachers)</option>
                                                <option value="Live Demo Teaching">Live Demo Teaching</option>
                                                <option value="Video Lesson Making">Video Lesson Making</option>
                                                <option value="Google App Mash-Up">Google App Mash-Up</option>
                                                <option value="SDO - Tuguegarao City ID AvP Making">SDO - Tuguegarao City ID AvP Making</option>
                                                <option value="National Anthem AvP Making">National Anthem AvP Making</option>
                                                <option value="Digital Banner Making">Digital Banner Making</option>
                                                <option disabled>-----------Day 3-------------</option>
                                                <option value="Closing Program/Awarding Ceremony">Closing Program/Awarding Ceremony</option>
                                            </select>
                                            <span class="text-danger">@error('activities'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Participant Image:</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="par_image">
                                                    <label>Choose file</label>
                                                </div>
                                            </div>
                                            <span class="text-danger">@error('par_image'){{ $message }}@enderror</span>
                                        </div>

                                        <div class="form-group">
                                            <label >Coach Image:</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="co_image">
                                                    <label>Choose file</label>
                                                </div>
                                            </div>
                                            <p><i>Note: If not STUDENT, please select the same image</i></p>
                                            <span class="text-danger">@error('co_image'){{ $message }}@enderror</span>
                                        </div>
                                        
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- base js -->
    
    <script src="{{asset('design/js/app.js')}}"></script>
    <script src="{{asset('design/assets/plugins/feather-icons/feather.min.js')}}"></script>
    <!-- end base js -->

    <!-- plugin js -->
        <!-- end plugin js -->
        

    <!-- common js -->
    
    <!-- end common js -->
    
   
    </body>
    @include('sweetalert::alert')
<!-- Mirrored from www.nobleui.com/laravel/template/light/auth/register by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 May 2021 00:52:15 GMT -->
</html>