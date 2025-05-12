
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>
  @include('partials.css')
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body"  style="border-radius: 90px 90px 0 0">
      <p class="login-box-msg">Sign in to start your session</p>
    @if(session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
            @endif


    

@if($errors->any())

<div class="alert alert-danger">
                {{ $errors->first() }}
              </div>
@endif



<form method="POST" action="{{ url('/login') }}" autocomplete="off">
  @csrf
  <div class="input-group mb-3">
    <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="new-email">
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-envelope"></span>
      </div>
    </div>
  </div>
  <div class="input-group mb-3">
    <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="new-password">
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-lock"></span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-8">
      
    </div>
    <!-- /.col -->
    <div class="col-4">
      <button type="submit" class="btn btn-primary btn-block">Sign In</button>
    </div>
    <!-- /.col -->
  </div>
</form>


    

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="/register" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@include('partials.js')

</body>
</html>
