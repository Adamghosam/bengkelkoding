<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function create()
    {
        $jeniskemasan = [
            'Blister', 'Strip', 'Botol', 'Tube', 'Ampul', 'Vial', 'Sachet', 'Dus'
        ];
        $obats = \App\Models\Obat::all(); // ambil semua data obat
        return view('pages.obat', compact('obats','jeniskemasan')); // kirim ke view
        

    }
    

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_obat' => 'required',
            'kemasan' => 'required',
            'harga' => 'required|numeric',
        ]);
    
        // Ambil harga yang sudah bersih dari simbol "Rp" dan titik
        $harga = $request->harga;
    
        // Simpan data ke database
        Obat::create([
            'nama_obat' => $request->nama_obat,
            'kemasan' => $request->kemasan,
            'harga' => $harga,  // Menyimpan harga sebagai angka biasa
        ]);
    
        return redirect()->back()->with('success', 'Data obat berhasil disimpan!');
    }
    
}
