<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_tiket',
        'nama_film',
        'nama_pemesan',
        'kursi',
        'harga',
        'jadwal_tayang',
    ];
}
