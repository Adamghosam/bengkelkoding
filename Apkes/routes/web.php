<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/lists-dokter', function () {
    return view('pages.list-dokter'); // Sesuaikan dengan folder dan nama file blade kamu
});