<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Periksa;
use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeriksaController extends Controller
{
    // Menyimpan janji periksa oleh pasien
    public function store(Request $request)
    {
        $request->validate([
            'dokter_id' => 'required|exists:users,id',
            'tanggal_periksa' => 'required|date',
        ]);
$sudahAda = Periksa::where('id_pasien', Auth::id())
                   ->where('status', 'belum diperiksa')
                   ->exists();

if ($sudahAda) {
    return redirect()->back()->with('error', 'Anda sudah membuat janji. Tidak bisa membuat janji lebih dari satu.');
}


        Periksa::create([
            'id_pasien' => Auth::id(),
            'id_dokter' => $request->dokter_id,
            'tgl_periksa' => $request->tanggal_periksa,
            'catatan' => '-',
            'biaya_periksa' => 0,
            'status' => 'belum diperiksa',
        ]);

        return redirect()->back()->with('success', 'Janji berhasil dibuat.');
    }

    // // Menampilkan form periksa untuk pasien
    public function formPeriksa()
    {
        $dokters = User::where('role', 'dokter')->get();
        $dataPeriksa = Periksa::where('id_pasien', Auth::id())
                              ->with('dokter')
                              ->latest()
                              ->get();
        // $existingJanji = Periksa::where('id_pasien', Auth::id())->first();
         // Ambil hanya janji yang statusnya 'belum diperiksa'
    $existingJanji = Periksa::where('id_pasien', Auth::id())
                            ->where('status', 'belum diperiksa')
                            ->first();

        return view('pages.pasien_periksa', compact('dokters', 'dataPeriksa', 'existingJanji'));
    }
    


public function indexDokter()
{
    // Ambil periksa dengan status 'belum diperiksa' atau 'sudah diperiksa'
    $dataPeriksa = Periksa::with(['pasien', 'dokter'])
        ->whereIn('status', ['belum diperiksa', 'sudah diperiksa']) // Menampilkan keduanya
        ->where('id_dokter', Auth::id()) // hanya milik dokter login
        ->get();

    return view('pages.priksa', compact('dataPeriksa'));
}


public function showPeriksaList()
{
    
    // Mengambil jumlah pasien yang sudah diperiksa
    $sudahDiperiksa = Periksa::where('status', 'sudah diperiksa')
        ->where('id_dokter', Auth::id()) // hanya milik dokter login
        ->count();

    // Mengambil jumlah pasien yang belum diperiksa
    $belumDiperiksa = Periksa::where('status', 'belum diperiksa')
        ->where('id_dokter', Auth::id()) // hanya milik dokter login
        ->count();

    // Menghitung total jumlah pasien (sudah dan belum diperiksa)
    $totalPasien = $sudahDiperiksa + $belumDiperiksa;

    return view('pages.home', compact('sudahDiperiksa', 'belumDiperiksa', 'totalPasien'));
}









    // Menampilkan form update pemeriksaan
    public function edit($id)
    {
        $periksa = Periksa::with('pasien')->findOrFail($id);
        $obats = Obat::all();
        

        return view('pages.update_pasien', compact('periksa', 'obats'));
    }

    // Menyimpan hasil pemeriksaan (oleh dokter)
    public function update(Request $request, $id)
{
    $request->validate([
        'catatan' => 'required',
        'obat_id' => 'required|array',
    ]);

    $periksa = Periksa::findOrFail($id);
    if ($periksa->status !== 'belum diperiksa') {
        return redirect()->route('dokter.periksa.index')->with('error', 'Status sudah diperbarui sebelumnya.');
    }

    // Update catatan dan status
    $periksa->update([
        'catatan' => $request->catatan,
        'status' => 'sudah diperiksa',
    ]);

    $totalObat = 0;

    foreach ($request->obat_id as $obatId) {
        $obat = Obat::find($obatId);
        if ($obat) {
            // Menambahkan obat baru ke detailPeriksa tanpa menghapus data lama
            $periksa->detailPeriksa()->create(['id_obat' => $obat->id]);
            $totalObat += $obat->harga;
        }
    }

    // Update biaya periksa setelah menambahkan obat
    $periksa->update([
        'biaya_periksa' => 150000 + $totalObat
    ]);

    return redirect()->route('dokter.periksa.index')->with('success', 'Pemeriksaan berhasil disimpan dan status diperbarui.');
}

    
}
