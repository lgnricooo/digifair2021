<!DOCTYPE html>
<!--
Template Name: NobleUI - Laravel Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Contact: nobleui123@gmail.com
License: You must have a valid license purchased only from https://themeforest.net/user/nobleui/portfolio/ in order to legally use the theme for your project.
-->
<html>
<head>
  <title>ICT Unit - Division of Tuguegarao City</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="VV8px7vA4CQWlAprjpbEoG9uXoE3y5pBqgmJaTOw">
  
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
              <a href="#" class="noble-ui-logo d-block mb-2">ICTU - <span>DIGIFAIR 2021</a>
              <h5 class="text-muted font-weight-normal mb-4">Create a account.</h5>
              <form class="forms-sample" method="post" action="{{route('register')}}">
              @if ( Session::get('error'))
                  <div class="alert alert-danger">
                        {{Session::get('error')}}
                  </div>
              @endif
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                  <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername1">Fullname</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" name="name"  placeholder="Fullname">
                  <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password"  placeholder="Password">
                  <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleConfirmPassword1">Confirm Password</label>
                  <input type="password" class="form-control" id="exampleConfirmPassword1" name="password_confirmation"  placeholder="Confirm Password">
                  <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                </div>
                
                <div class="mt-3">
                <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">Register</button>
                </div>
                <a href="{{route('login')}}" class="d-block mt-3 text-muted">Already a user? Sign in</a>
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
</html>