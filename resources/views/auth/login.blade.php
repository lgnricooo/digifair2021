<!DOCTYPE html>


<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <title>ICT Unit - Division of Tuguegarao City</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="9mxBxVZzvivsC9AmYcI0zKqctD5oADP4K2l21ri0">
  
  <link rel="shortcut icon" href="{{asset('homeAssets/images/ictu.png')}}">

  <!-- plugin css -->
  <link href="{{asset('design/assets/fonts/feather-font/css/iconfont.css')}}" rel="stylesheet" />
  <link href="{{asset('design/assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" />
  <!-- end plugin css -->

  
  <!-- common css -->
  <link href="{{asset('design/css/app.css')}}" rel="stylesheet" />
  <!-- end common css -->

  </head>
<body >

  

  <div class="main-wrapper" id="app">
    <div class="page-wrapper full-page">
      <div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-4 pr-md-0">
            <div class="auth-left-wrapper" style="background-image: url('{{asset('/homeAssets/images/ictu.png')}}')">

            </div>
          </div>
          <div class="col-md-8 pl-md-0">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="#" class="noble-ui-logo d-block mb-2">ICTU - <span>DIGIFAIR 2021</span></a>
              <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>
              <form class="forms-sample" method="post" action="{{route('login')}}">
              @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" autocomplete="current-password" placeholder="Password">
                </div>
                
                <div class="mt-3">
                 <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">Login</button>
                </div>
                <a href="{{route('register')}}" class="d-block mt-3 text-muted">Not a user? Sign up</a>
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
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('assets/plugins/feather-icons/feather.min.js')}}"></script>
    <!-- end base js -->

    <!-- plugin js -->
        <!-- end plugin js -->

    <!-- common js -->
    
    <!-- end common js -->

    </body>

<!-- Mirrored from www.nobleui.com/laravel/template/light/auth/login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 May 2021 00:52:15 GMT -->
</html>