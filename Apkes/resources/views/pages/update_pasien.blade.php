@extends('layouts.main')

@section('title', 'Apkes | Periksa Pasien')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Periksa Pasien</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Diagnosa Pasien</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title font-weight-bold">Form Pemeriksaan Pasien</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>

      @if(session('success'))
        <div class="alert alert-success m-3" role="alert">
          {{ session('success') }}
        </div>
      @endif
<form action="{{ route('dokter.periksa.update', $periksa->id) }}" method="POST" autocomplete="off">
    @csrf
    @method('PATCH')
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
            
                <div class="form-group">
                    <label>Nama Pasien</label>
                    
                    <input type="text" class="form-control" value="{{ $periksa->pasien->nama }}" disabled style="text-transform: uppercase;font-weight: bold;">
                </div>
                    
                
                <div class="form-group">
                    <label>Catatan</label>
                    <textarea name="catatan" class="form-control" required>{{ old('catatan', $periksa->catatan) }}</textarea>
                </div>
                <div class="form-group">
                    <label>Pilih Obat</label>
                    <div class="select2-purple">
                        <select name="obat_id[]" class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;" onchange="updateTotal()">
                            @foreach ($obats as $obat)
                                <option value="{{ $obat->id }}" data-price="{{ $obat->harga }}">{{ $obat->nama_obat }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Total Biaya</label>
                    <input type="text" class="form-control" id="total-biaya" value="Rp {{ number_format(150000, 0, ',', '.') }}" disabled>
                </div>
            </div>
        </div> 
    </div>
        <!-- Tambahkan tombol simpan di bawah form -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
    </div>
  </div>
</section>
@endsection
