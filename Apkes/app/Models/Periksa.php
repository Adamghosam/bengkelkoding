<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;

    protected $table = 'periksa';  // Nama tabel jika berbeda dengan nama model (optional)
    
    // Definisikan kolom yang bisa diisi secara massal
    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tgl_periksa',
        'catatan',
        'biaya_periksa',
        'status',
    ];



    public function dokter()
{
    return $this->belongsTo(User::class, 'id_dokter');
    
}

public function pasien()
{
    return $this->belongsTo(User::class, 'id_pasien');
}

public function obats()
{
    return $this->belongsToMany(Obat::class, 'detail_periksa', 'id_periksa', 'id_obat');
}
public function detailPeriksa()
{
    return $this->hasMany(DetailPeriksa::class, 'id_periksa');
}


}




class DetailPeriksa extends Model
{
    use HasFactory;

    protected $table = 'detail_periksa';  // Nama tabel, jika berbeda

    protected $fillable = [
        'id_periksa', 
        'id_obat', 
    ];

    public function periksa()
    {
        return $this->belongsTo(Periksa::class, 'id_periksa');
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }
}






