<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/dashboard', function () {
    return view('pages.home');
});


Route::get('/lists-dokter', [UserController::class, 'indexDokter']);


Route::get('/adddokter', function () {
    return view('pages.add-dokter'); 
});
Route::get('/periksa', function () {
    return view('pages.priksa'); 
});

// This route will use the ObatController to show the form
Route::get('/obat', [ObatController::class, 'create']);

// This route will handle the POST request to save data
Route::post('/obat', [ObatController::class, 'store'])->name('obat.store');


Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');



// routing dokter
Route::post('/register-dokter', [AuthController::class, 'registerDokter'])->middleware('auth');
Route::get('/dokter', [UserController::class, 'indexDokter'])->middleware('auth');

