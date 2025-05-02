<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/lists-dokter', function () {
    return view('pages.list-dokter'); 
});

Route::get('/periksa', function () {
    return view('pages.priksa'); 
});

// This route will use the ObatController to show the form
Route::get('/obat', [ObatController::class, 'create']);

// This route will handle the POST request to save data
Route::post('/obat', [ObatController::class, 'store'])->name('obat.store');
