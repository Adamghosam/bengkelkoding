@extends('layouts.main')

@section('title', 'Apkes | Obat')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Tambah Data Obat</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Form Obat</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title font-weight-bold">Form Tambah Obat</h3>
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


      <form action="{{ route('obat.store') }}" method="POST" id="obatForm">
      
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama Obat</label>
                <input type="text" name="nama_obat" class="form-control" placeholder="Masukkan nama obat" required autocomplete="off">
              </div>

              <div class="form-group">
    <label>Kemasan</label>
    <select name="kemasan" class="form-control select2bs4" style="width: 100%;"> <!-- Pastikan ada atribut name -->
        <option value="" selected disabled>Pilih Kemasan</option> <!-- Placeholder jika belum dipilih -->
        @foreach($jeniskemasan as $k)
            <option value="{{ $k }}">{{ $k }}</option>
        @endforeach
    </select>
</div>

            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga"  id="harga" class="form-control" placeholder="Masukkan harga" required autocomplete="off">
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">
            <i class="fas fa-plus"></i> Simpan Data
          </button>
        </div>
      </form>
    </div>



        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title font-weight-bold">Daftar List Obat</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama</th>
                      <th>Kemasan</th>
                      <th>Harga</th>
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($obats as $obat)
             
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $obat->nama_obat }}</td>
                      <td>{{ $obat->kemasan }}</td>
                      <td>{{ 'Rp. ' . number_format($obat->harga, 0, ',', '.') }}</td>
                      <td>{{ $obat->created_at }}</td>    
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
    
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->



@endsection
