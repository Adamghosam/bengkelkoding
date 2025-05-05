<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexDokter()
{
    $dokters = User::where('role', 'dokter')->get();
    return view('pages.listdokter', compact('data_dokter'));
}

}
