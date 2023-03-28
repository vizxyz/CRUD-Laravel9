<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\transaksi;

class TransaksiController extends Controller
{
    Public function index()
    {  
       $transaksi= transaksi::all();
       return view('transaksi',['transaksi'=>$transaksi]);
    }
    Public function create($kd_barang) 
    {
        $barang = DB::table('barang')-> where('kd_barang', $kd_barang,)->get();

        return view('tambah_transaksi', ['barang' => $barang]);
    }
    Public function store(Request $request)
    {
       //insert data ke table bahan
       DB::table('transaksi')->insert([
          'kd_barang' => $request->kode,
          'jumlah_beli' => $request->jumlah_beli,
       ]);
       //alihkan halaman ke halaman bahan
       return redirect('/transaksi')->with('status', 'Data Berhasil Ditambah');
    }
    // method untuk edit data barang
    Public function edit($id)
    {
     // mengambil data barang berdasarkan id yang dipilih
      $transaksi = DB::table('transaksi')->where('id_transaksi', $id)->get();
     // passing data barang yang didapat ke view edit_barang.blade.php
     return view('edit_transaksi', ['transaksi' => $transaksi]);
    }
    // update data barang
    public function update(Request $request)
    {
        // update data barang
        DB::table('transaksi')->where('id_transaksi', $request->id)->update([
            'kd_barang' => $request->kode,
            'jumlah_beli' => $request->jumlah_beli,
        ]);
        // alihkan halaman ke halaman Barang
        return redirect('/transaksi');
    }
    // delete data barang
    public function delete($id)
    {
        // delete data barang berdasarkan id yang dipilih
        DB::table('transaksi')->where('id_transaksi', $id)->delete();
 
        // alihkan halaman ke halaman Barang
        return redirect('/transaksi');
    }
 
}
