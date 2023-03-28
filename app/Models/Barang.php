<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $table = "barang";
    protected $primaryKey = "kd_barang";
    protected $fillable = ['gambar', 'kd_barang', 'nama_barang', 'stok'];
    public function transaksi()
    {
        //return $this->belongsTo('App\Models\transaksi', 'kd_brg');
        return $this->hasMany('App\Models\transaksi', 'kd_barang');
    }
    
}

