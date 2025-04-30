
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-color: rgb(234, 191, 20);">
<div class="login-box">
  <div class="login-logo">
    <a href="{{asset('AdminLTE')}}/index2.html"><h1 style="color:rgb(0, 0, 0); font-size: 52px;"><b>KANTONG SNACK</b></h1></a>
  </div>
  <!-- /.login-logo -->
  <div class="card" >
    <div class="card-body login-card-body rounded" style="background-color: #FFF6E0;">
      <p class="login-box-msg" style="font-size: 30px; color: #D43C50;"><b>Selamat Datang</b></p>
        <div class="container d-flex justify-content-center">
          <a href="{{ route('login') }}" type="button" class="btn" style="background-color: #FFD447; color:rgb(0, 0, 0); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">Masuk</a>
        </div>
      
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('AdminLTE')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE')}}/dist/js/adminlte.min.js"></script>
</body>
</html>
