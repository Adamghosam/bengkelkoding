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
      <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">



<!-- Brand Logo -->
<a href="../../index3.html" class="brand-link">
  <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  <span class="brand-text font-weight-light">APKES</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
    @if(Auth::check())
    <a href="#" class="d-block">{{ strtoupper(Auth::user()->nama) }}</a>
@else
    <a href="#" class="d-block">GUEST</a>
@endif


    </div>
  </div>

  <!-- SidebarSearch Form -->


  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
   aria-label="Search">

      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    

    @auth
      @if(auth()->user()->role === 'dokter')

        <!-- Menu untuk DOKTER -->
         <li class="nav-item">
          <a href="/dashboard" class="nav-link">
            
            <i class="nav-icon fa-solid fa-gauge"></i>
            <p>DASHBOARD</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-user-doctor"></i>
            <p>DOKTER <i class="right fas fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/lists-dokter" class="nav-link">
                <i class="far fa-solid fa-elevator"></i>
                <p style="margin-left: 20px;"> Daftar Dokter</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/adddokter" class="nav-link">
                <i class="far fa-solid fa-person-circle-plus"></i>
                <p style="margin-left: 20px;">Tambah Dokter</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/obat" class="nav-link">
            <i class="nav-icon fa-solid fa-capsules"></i>
            <p>OBAT</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/periksa" class="nav-link">
            <i class="nav-icon fa-solid fa-person-circle-check"></i>
            <p>PEMERIKSAAN</p>
          </a>
        </li>
      @elseif(auth()->user()->role === 'pasien')

      <li class="nav-item">
          <a href="/dashboard" class="nav-link">
            
            <i class="nav-icon fa-solid fa-gauge"></i>
            <p>DASHBOARD</p>
          </a>
        </li>
        <!-- Menu untuk PASIEN -->
        <li class="nav-item">
          <a href="/periksa-pasien" class="nav-link">
            <i class="nav-icon fa-solid fa-person-circle-check"></i>
            <p>PEMERIKSAAN</p>
          </a>
        </li>
      @endif
    @endauth

  </ul>
</nav>

  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

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
  <!-- {{-- Semua JS dipanggil di sini --}} -->
  @include('partials.js')
</body>
</html>
