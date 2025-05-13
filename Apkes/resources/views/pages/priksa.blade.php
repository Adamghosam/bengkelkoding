
@extends('layouts.main')

@section('title', 'Apkes | Periksa')

@section('content')




<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>MEMERIKSA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Pasien</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Periksa Pasien</h3>
              </div>
              
           <!-- /.card-header -->
<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Pasien</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataPeriksa as $psk)
                <tr>
                    <td>{{ $psk->pasien->nama }}</td>
                    <td>{{ $psk->tgl_periksa }}</td>
                    <td><span class="badge badge-primary">{{ $psk->status }}</span></td>
                    <td>
                        @if ($psk->status == 'belum diperiksa')
                            <a href="{{ route('dokter.periksa.edit', $psk->id) }}" class="btn btn-sm btn-primary">Periksa</a>
                        @else
                            <button class="btn btn-sm btn-secondary" disabled>Sudah Diperiksa</button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->



@endsection
