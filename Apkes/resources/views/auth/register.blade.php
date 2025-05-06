
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>

  <!-- {{-- Panggil semua CSS cukup sekali --}} -->
  @include('partials.css')
</head>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p style="color:red">{{ $error }}</p>
    @endforeach
@endif

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>
      <form method="POST" action="{{ url('/register') }}" autocomplete="off">
  @csrf

  <div class="input-group mb-3">
    <input type="text" class="form-control" name="nama" placeholder="Full name" required autocomplete="new-name">
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-user"></span>
      </div>
    </div>
  </div>

  <div class="input-group mb-3">
    <input type="text" class="form-control" name="alamat" placeholder="Alamat Rumah" required autocomplete="new-address">
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-location-dot"></span>
      </div>
    </div>
  </div>

  <div class="input-group mb-3">
    <input type="text" class="form-control" name="no_hp" placeholder="No Hp" required autocomplete="new-phone">
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-phone"></span>
      </div>
    </div>
  </div>

  <div class="input-group mb-3">
    <input type="email" class="form-control" name="email" placeholder="Email" required autocomplete="new-email">
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-envelope"></span>
      </div>
    </div>
  </div>

  <div class="input-group mb-3">
    <input type="password" class="form-control" name="password" placeholder="Password" required autocomplete="new-password">
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-lock"></span>
      </div>
    </div>
  </div>

  <div class="input-group mb-3">
    <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" required autocomplete="new-password">
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-lock"></span>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-8">
      
    </div>
    <div class="col-4">
      <button type="submit" class="btn btn-primary btn-block">Register</button>
    </div>
  </div>
</form>



   

      <a href="/login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

  <!-- {{-- Panggil semua CSS cukup sekali --}} -->
  @include('partials.js')

</body>
</html>