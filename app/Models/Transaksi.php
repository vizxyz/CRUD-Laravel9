<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksi";
    protected $primaryKey = "id_transaksi";
    protected $fileable = ['id_transaksi', 'kd_barang', 'jumlah_beli'];
    public function barang()
    {
        return $this ->belongsTo('App\Models\barang', 'kd_barang');
    }
}
