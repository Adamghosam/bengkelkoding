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
public function edit($id)
{
    $obat = Obat::findOrFail($id);
    $jeniskemasan = [
        'Blister', 'Strip', 'Botol', 'Tube', 'Ampul', 'Vial', 'Sachet', 'Dus'
    ];
    return view('pages.edit-obat', compact('obat', 'jeniskemasan')); // Mengarah ke pages.edit-obat
}


public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'nama_obat' => 'required',
        'kemasan' => 'required',
        'harga' => 'required|numeric',
    ]);

    // Ambil data obat yang akan diperbarui
    $obat = Obat::findOrFail($id);
    $obat->update([
        'nama_obat' => $request->nama_obat,
        'kemasan' => $request->kemasan,
        'harga' => $request->harga,
    ]);

    // Setelah update, arahkan kembali ke halaman daftar obat
    return redirect()->route('obat.index')->with('success', 'Data obat berhasil diperbarui!');
}


public function destroy($id)
{
    $obat = Obat::findOrFail($id);
    $obat->delete();

    return redirect('/obat')->with('success', 'Data obat berhasil dihapus!');
}

public function index()
{
    $obats = Obat::all(); // Mengambil semua data obat dari database
    return view('pages.obat', compact('obats')); // Mengirim data obat ke view
}


   
    
}
