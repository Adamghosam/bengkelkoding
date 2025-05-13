@extends('layouts.main')

@section('title', 'Apkes | Periksa')

@section('content')
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>MEMERIKSA</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Janji Dokter</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Janji Dengan Dokter</h3>
                        </div>

                        <div class="card-body">
                            <!-- Cek apakah sudah punya janji -->
                            @if ($existingJanji)
                                <div class="alert alert-info">
                                    Anda sudah memiliki janji dengan dokter
                                    <strong>{{ $existingJanji->dokter->nama }}</strong>
                                    pada tanggal <strong>{{ $existingJanji->tgl_periksa }}</strong>.
                                </div>
                            @else
                                <form action="{{ route('periksa.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="dokter_id">Pilih Dokter:</label>
                                                <select name="dokter_id" id="dokter_id" class="form-control" required>
                                                    <option value="" disabled selected>Pilih Dokter</option>
                                                    @foreach ($dokters as $dokter)
                                                        <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                                                    @endforeach
                                                </select>
                                                @error('dokter_id')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tanggal_periksa">Tanggal Periksa:</label>
                                                <input type="date" name="tanggal_periksa" id="tanggal_periksa"
                                                    class="form-control" required>
                                                @error('tanggal_periksa')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-plus"></i> Buat Janji
                                    </button>
                                </form>
                            @endif

                            <hr>

                            <!-- Tabel Riwayat -->
                            <h5 class="mt-4">Riwayat Janji</h5>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Dokter</th>
                                        <th>Tanggal</th>
                                        <th>Catatan</th>
                                        <th>Biaya</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dataPeriksa as $periksa)
                                        <tr>
                                            <td>{{ $periksa->dokter->nama ?? '-' }}</td>
                                            <td>{{ $periksa->tgl_periksa }}</td>
                                            <td>{{ $periksa->catatan }}</td>
                                            <td>
                                                Rp{{ number_format($periksa->biaya_periksa, 0, ',', '.') }}
                                                <br>
                                                <small class="text-muted">(@php echo $periksa->obats->count(); @endphp obat)</small>
                                            </td>

                                            <td>
                                                <span class="badge" data-status="{{ strtolower($periksa->status) }}"
                                                    id="status-badge-{{ $periksa->id }}">
                                                    {{ $periksa->status }}
                                                </span>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">Belum ada janji dibuat.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    @include('layouts.alert-success')
@endsection
