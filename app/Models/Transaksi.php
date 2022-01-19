<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'transaksis';

    protected $fillable = [
        'user',
        'id_kendaraan'
    ];

    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class);
    }
}
