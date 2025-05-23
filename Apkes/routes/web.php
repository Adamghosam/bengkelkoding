<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PeriksaController;

// Halaman publik
Route::get('/', function () {
    return view('pages.dashboard'); 
});

// Route::get('/', [PeriksaController::class, 'showPeriksa'])->name('dokter.main');


// Login dan Register
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

// Rute yang hanya bisa diakses setelah login
Route::middleware(['auth'])->group(function () {
    // Route untuk halaman home dokter
   

    Route::get('/dashboard', [PeriksaController::class, 'showPeriksaList'])->name('dokter.home');
    



    // // Dashboard
    // Route::get('', function () {
    //     return view('pages.home');
    // });

    // Daftar dokter dan tambah dokter
    Route::get('/lists-dokter', [UserController::class, 'indexDokter']);
    Route::get('/adddokter', function () {
        return view('pages.add-dokter'); 
    });

    // Periksa
    Route::get('/periksa', [PeriksaController::class, 'indexDokter'])->name('dokter.periksa');
    Route::get('/periksa-pasien', [PeriksaController::class, 'formPeriksa'])->name('periksa.pasien');
    Route::post('/periksa-pasien', [PeriksaController::class, 'store'])->name('periksa.store');
    Route::patch('/periksa/update-status/{id}', [PeriksaController::class, 'updateStatus'])->name('periksa.updateStatus');
    Route::get('/periksa', [PeriksaController::class, 'indexDokter'])->name('dokter.periksa.index');

    // Form edit periksa dan update hasil pemeriksaan
    Route::get('/periksa/{id}/edit', [PeriksaController::class, 'edit'])->name('dokter.periksa.edit');
    Route::patch('/periksa/{id}', [PeriksaController::class, 'update'])->name('dokter.periksa.update');

    // Obat
    Route::get('/obat', [ObatController::class, 'create']);
    Route::post('/obat', [ObatController::class, 'store'])->name('obat.store');
    // Obat

        // // Menampilkan form edit
    Route::get('/obat', [ObatController::class, 'create'])->name('obat.index');

    Route::get('/obat/{id}/edit', [ObatController::class, 'edit'])->name('obat.edit');

    // Menyimpan hasil edit (update data)
    Route::put('/obat/{id}', [ObatController::class, 'update'])->name('obat.update');

    // Menghapus data obat
    Route::delete('/obat/{id}', [ObatController::class, 'destroy'])->name('obat.destroy');


    // Logout
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/register-dokter', [AuthController::class, 'registerDokter']);
    Route::get('/dokter', [UserController::class, 'indexDokter']);

});
