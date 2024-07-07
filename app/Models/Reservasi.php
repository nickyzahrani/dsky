<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasi';

    protected $fillable = [
        'id_reservasi',
        'id_user',
        'id_meja',
        'id_paket',
        'tanggal',
        'waktu',
        'lama_main',
        'harga_total',
    ];

    // Relasi ke tabel Users
    public function user()
    {
        return $this->hasOne(Users::class,'id', 'user_id');
    }

    // Relasi ke tabel Meja
    public function meja()
    {
        return $this->hasOne(Users::class,'id_meja', 'meja_id');
    }

    // Relasi ke tabel Paket 
    public function paket()
    {
        return $this->hasOne(Users::class,'id_paket', 'paket_id');
    }
}
