
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Selective | Register </title>
  <link rel="shortcut icon" href="/template/edulab/images/logodash1.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../template/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../template/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../template/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <style>
    body {
      background-image: url('/template/edulab/images/background.jpg');
      background-repeat: no-repeat;
      background-size: 100% 100%;
    }
    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1">Register Admin</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register to start your session</p>

      <form method="POST" action="/register">
        @csrf
            <div class="input-group mb-3">
            <input type="text" name="name" class="form-control" placeholder="Name">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
            </div>

            <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
            </div>
            {{-- <div class="input-group mb-3">
              <input type="text" name="level" class="form-control" placeholder="Level">
              <div class="input-group-append">
                  <div class="input-group-text">
                      <span class="fas fa-user"></span>
                          @error('level')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                  </div>
              </div>
              </div> --}}
              <div class ="btn-group" data-toggle="buttons">
                <label class="btn btn-primary active">
                  <input type="radio" name="level"  autocomplete="off" value="Super User">Super User
                </label>
                <label class="btn btn-primary active">
                  <input type="radio" name="level"  autocomplete="off" value="Middle User">Middle User
                </label>
                <label class="btn btn-primary active">
                  <input type="radio" name="level"  autocomplete="off" value="Low User">Low User
                </label>

              </div>
        <div class="input-group mb-3">
          <input type="password" name='password' class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror              
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name='password_confirmation' class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              {{-- <input type="checkbox" id="remember">
              <label for="remember">
                
              </label> --}}
            </div>
          </div>
          <!-- /.col -->
          
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      {{-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> --}}
      <!-- /.social-auth-links -->

      {{-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> --}}
      <p class="mb-0">
        <a href="/login" class="text-center">LOGIN</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/../../template/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/../../template/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../template/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
