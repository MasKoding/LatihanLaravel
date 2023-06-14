<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;
    protected $table='InventarisKomputer';

    protected $fillable=[
        'NamaKomputer',
        'TanggalPembelian',
        'Pemilik',
        'JenisKomputer',
        'NomorSeri',
        'Spesifikasi',
        'Status',
        'Lokasi',
        'Catatan'
    ];

}
