@extends('layouts.main')

@section('title', 'Apkes | Edit Obat')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Data Obat</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Form Edit Obat</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title font-weight-bold">Form Edit Obat</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>


      <!-- Form untuk mengedit obat -->
      <form action="{{ route('obat.update', $obat->id) }}" method="POST" id="obatForm">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama Obat</label>
                <input type="text" name="nama_obat" class="form-control" placeholder="Masukkan nama obat" required autocomplete="off" value="{{ old('nama_obat', $obat->nama_obat) }}">
                @error('nama_obat')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label>Kemasan</label>
                <select name="kemasan" class="form-control select2bs4" style="width: 100%;" required>
                    <option value="" disabled>Pilih Kemasan</option>
                    @foreach($jeniskemasan as $k)
                        <option value="{{ $k }}" {{ $k == old('kemasan', $obat->kemasan) ? 'selected' : '' }}>{{ $k }}</option>
                    @endforeach
                </select>
                @error('kemasan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan harga" required autocomplete="off" value="{{ old('harga', $obat->harga) }}">
                @error('harga')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
          <a href="{{ route('obat.index') }}" class="btn btn-secondary">Batal</a>
        </div>
      </form>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
        
         
        </div>
      </div>
    </div>
  </div>
</section>


@include('layouts.alert-success')

@endsection
