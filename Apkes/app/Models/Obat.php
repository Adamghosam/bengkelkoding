<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obat'; // Sesuaikan dengan nama tabel
    protected $fillable = ['nama_obat', 'kemasan', 'harga'];

    public function periksas()
{
    return $this->belongsToMany(Periksa::class, 'periksa_obat')->withPivot('jumlah');
}

}
