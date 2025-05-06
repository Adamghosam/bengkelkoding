<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // <-- ini penting

class UserController extends Controller
{
    public function indexDokter()
    {
        $data_dokter = User::where('role', 'dokter')->get();
        return view('pages.listdokter', compact('data_dokter'));
    }
}
