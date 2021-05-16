<!DOCTYPE html>
<html>
<head>
  <title>ICT Unit - Division of Tuguegarao City</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <!-- CSRF Token -->
  
  <link rel="shortcut icon" href="{{asset('/homeAssets/images/ictu.png')}}">

  <!-- plugin css -->
  <link href="{{asset('design/assets/fonts/feather-font/css/iconfont.css')}}" rel="stylesheet" />
  <link href="{{asset('design/assets/plugins/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet" />
  <link href="{{asset('design/assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" />
  <!-- end plugin css -->

  
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    
  <!-- common css -->
  <link href="{{asset('design/css/app.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
  <!-- end common css -->

  </head>
<body>

  

  <div class="main-wrapper" id="app">
  <nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
    <span>DIGIFAIR2021</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item ">
        <a href="{{route('admin.dashboard')}}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Registration Menu</li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#email" role="button" aria-expanded="false" aria-controls="email">
          <i class="link-icon" data-feather="list"></i>
          <span class="link-title">Registered Participants</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="email">
          <ul class="nav sub-menu">
          <li class="nav-item">
              <a href="{{route('admin.opening')}}" class="nav-link ">Opening Program</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.kamustahan') }}" class="nav-link ">ICT - KAMUSTAHAN</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.handout') }}" class="nav-link ">Hand-out Making (Elem)</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.slidejhs') }}" class="nav-link ">Slide Presentation (JHS)</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.viddoc') }}" class="nav-link ">Video Documentary (SHS)</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.plenS') }}" class="nav-link ">Plenary Session (Students)</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.plenT') }}" class="nav-link ">Plenary Session (Teachers)</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.demo') }}" class="nav-link ">Live Demo Teaching</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.lesson') }}" class="nav-link ">Video Lesson Making</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.google') }}" class="nav-link ">Google App Mash-Up</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.sdo') }}" class="nav-link ">SDO - AvP Making</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.national') }}" class="nav-link ">National Anthem AvP Making</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.digital') }}" class="nav-link ">Digital Banner Making</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.closing') }}" class="nav-link ">Closing Program</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">Attendance Menu</li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
          <i class="link-icon" data-feather="check-circle"></i>
          <span class="link-title">Attendance</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse " id="uiComponents">
        <ul class="nav sub-menu">
          <li class="nav-item">
              <a href="{{route('admin.openingAttendance')}}" class="nav-link ">Opening Program</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.kamustahanAttendance') }}" class="nav-link ">ICT - KAMUSTAHAN</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.handoutAttendance') }}" class="nav-link ">Hand-out Making (Elem)</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.slidejhsAttendance') }}" class="nav-link ">Slide Presentation (JHS)</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.viddocAttendance') }}" class="nav-link ">Video Documentary (SHS)</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.plenSAttendance') }}" class="nav-link ">Plenary Session (Students)</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.plenTAttendance') }}" class="nav-link ">Plenary Session (Teachers)</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.demoAttendance') }}" class="nav-link ">Live Demo Teaching</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.lessonAttendance') }}" class="nav-link ">Video Lesson Making</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.googleAttendance') }}" class="nav-link ">Google App Mash-Up</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.sdoAttendance') }}" class="nav-link ">SDO - AvP Making</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.nationalAttendance') }}" class="nav-link ">National Anthem AvP Making</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.digitalAttendance') }}" class="nav-link ">Digital Banner Making</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.closingAttendance') }}" class="nav-link ">Closing Program</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</nav>
    <div class="page-wrapper">
      <nav class="navbar">
  <a href="#" class="sidebar-toggler">
    <i data-feather="menu"></i>
  </a>
  <div class="navbar-content">
    <form class="search-form">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i data-feather="search"></i>
          </div>
        </div>
        <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
      </div>
    </form>
    <ul class="navbar-nav">
      
      <li class="nav-item dropdown nav-profile">
        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="{{asset('homeAssets/images/user.png')}}" alt="profile">
        </a>
        <div class="dropdown-menu" aria-labelledby="profileDropdown">
          <div class="dropdown-header d-flex flex-column align-items-center">
            <div class="figure mb-3">
              <img src="{{asset('homeAssets/images/user.png')}}" alt="">
            </div>
            <div class="info text-center">
              <p class="name font-weight-bold mb-0">{{Auth()->user()->name}}</p>
              <p class="email text-muted mb-3">{{Auth()->user()->email}}</p>
            </div>
          </div>
          <div class="dropdown-body">
            <ul class="profile-nav p-0 pt-3">
              
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                  <i data-feather="log-out"></i>
                  <span>Log Out</span>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                </form>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
  </div>
</nav>      <div class="page-content">
        <nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Attendance</a></li>
    <li class="breadcrumb-item active" aria-current="page">Hand-out Making</li>
  </ol>
</nav>

{{-- edit modal --}}
    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                </div>
                <div class="modal-body">
                    <form id="userForm" name="userForm" class="form-horizontal">
                        <input type="hidden" name="user_id" id="user_id">
                        <h4>Are you sure you want to change the status to Attended?<h4>
                        <div class="form-group">
                            <label for="activities">Status:</label>
                              <select class="form-control" id="status" name="status">
                                <option default>Select Activity</option>
                                <option value="Not Attended">Not Attended</option>
                                <option value="Attended">Attended</option>
                              </select> 
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                            </button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Hand-out Making Attendance</h6>
        <div class="table-responsive pt-1">
          <table class="table table-bordered datatable" style="width: 100%">
            <thead>
                <tr>
                    
                    <th>Participant Image</th>
                    <th>Email</th>
                    <th>Name of Participant</th>
                    <th>School</th>
                    <th>District</th>
                    <th>Activity</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>






      </div>
      <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
      <p class="text-muted text-center text-md-left">Copyright © 2021 <a href="" target="_blank">John Rico Toribio</a>. All rights reserved</p>
  <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
</footer>    
</div>
  </div>
  

    <!-- base js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="{{asset('design/js/app.js')}}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script src="{{asset('design/assets/plugins/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('design/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
    <!-- end base js -->

    <!-- plugin js -->
        <!-- end plugin js -->

    <!-- common js -->
    <script src="{{asset('design/assets/js/template.js')}}"></script>
    <!-- end common js -->
    <script type="text/javascript">
        $(function(){
			$.ajaxSetup({
				headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
			});
			var table = $('.datatable').DataTable({
        dom: 'Bfrtip',
                buttons: [
                   'excel', 'pdf', 'print'
                ],
                processing: true,
                serverSide: true,
				responsive: true,
                ajax: "{{ route('admin.handoutAttendance') }}",
                columns: [
                    {
                        data: 'par_image',
                        name: 'par_image',
                        render: function (data, type, row, meta) {
                            return '<img src=" {{asset('images')}}/' + data +'" height="50" width="50"/>';
                        }
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
					          {
                        data: 'name_participant',
                        name: 'name_participant'
                    },
					          {
                        data: 'school',
                        name: 'school'
                    },
					          {
                        data: 'district',
                        name: 'district'
                    },
                    {
                        data: 'activities',
                        name: 'activities'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },

                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
            $('body').on('click', '.editParticipant', function() {
                var user_id = $(this).data('id');
                var editUrl = '{{ route('admin.edit', ':id') }}';
                editUrl = editUrl.replace(':id', user_id);
                $.get(editUrl, function(data) {
                    $('#modelHeading').html("Change Status");
                    $('#saveBtn').val("edit-participant");
                    $('#ajaxModel').modal('show');
                    $('#user_id').val(data.id);
                    $('#status').val(data.status);
                })
            });
            $('#saveBtn').click(function(e) {
                e.preventDefault();
                $(this).html('Save');

                $.ajax({
                    data: $('#userForm').serialize(),
                    url: "{{ route('admin.update') }}",
                    type: "GET",
                    dataType: 'json',
                    success: function(data) {

                        $('#userForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        swal.fire("Updated Successfully!", data.message, "success");
                        console.log('Success:', data);
                        table.draw();
                    },
                    error: function(data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                });
            });
            
            // setInterval(function() {
            //     table.draw();
            // }, 500);
			//create
		})
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    </body>
    @include('sweetalert::alert')
<!-- Mirrored from www.nobleui.com/laravel/template/light/tables/basic-tables by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 May 2021 00:52:10 GMT -->
</html>