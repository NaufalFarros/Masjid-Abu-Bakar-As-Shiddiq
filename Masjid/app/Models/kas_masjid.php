<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kas_masjid extends Model
{
    use HasFactory;
    protected $table = "kas_masjids";
    protected $fillable = [
        'keterangan',
        'pemasukan',
        'pengeluaran',
        'tanggal',
        'jenis',
];
protected $dates = [
    'tanggal',
];
}
