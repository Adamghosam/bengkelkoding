@extends('layouts.main')

@section('title', 'Apkes | Tambah Dokter')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Tambah Data Dokter</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Form Add Dokter</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title font-weight-bold">Form Tambah Dokter</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
<!-- Alert Success -->
@if(session('success'))
        <div class="alert alert-success" role="alert">      
          {{ session('success') }}
        </div>
@endif
      <!--  -->


      </div>


      <form action="{{ url('/register-dokter') }}" method="POST" autocomplete="off">
  @csrf
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" name="alamat" class="form-control" placeholder="Alamat" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
        </div>
        <div class="form-group">
          <label>No HP</label>
          <input type="text" name="no_hp" class="form-control" placeholder="No HP" autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control" placeholder="Email" autocomplete="new-email" readonly onfocus="this.removeAttribute('readonly');">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="new-password" readonly onfocus="this.removeAttribute('readonly');">
        </div>
        <div class="form-group">
          <label>Konfirmasi Password</label>
          <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" autocomplete="new-password" readonly onfocus="this.removeAttribute('readonly');">
        </div>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">
      <i class="fas fa-plus"></i> Simpan Data
    </button>
  </div>
</form>


    </div>



        
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->



@endsection
