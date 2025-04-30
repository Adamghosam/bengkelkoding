<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'APKES')</title>

  <!-- {{-- Panggil semua CSS cukup sekali --}} -->
  @include('partials.css')
</head>
<body class="hold-transition sidebar-mini">
  
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- /.navbar -->

    <!-- Sidebar -->
    @include('partials.sidebar')
    <!-- /. Sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content') <!-- Ini untuk konten dinamis -->
    </div>
    <!-- ./Content Wrapper -->

    <!-- footer -->
    @include("partials.footer")
    <!-- ./footer -->

  <!-- ./wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

<<<<<<< HEAD

=======
  <!-- {{-- Semua JS dipanggil di sini --}} -->
  @include('partials.js')
>>>>>>> fitur2
</body>
</html>
