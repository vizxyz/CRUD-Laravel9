<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use Illuminate\Support\Facades\File;

class BarangController extends Controller
{
    // Menampilkan Database
	public function index()
    {
        $data_barang = DB::table('barang')->get();

        return view('barang',['data_barang'=>$data_barang]);
	}

    // Menambahkan Data ke Database
	public function store(Request $request)
	{
        
        $request->hasFile('gambar');
        $folder = "gambar";
        $filename = $request->file('gambar');
        $filename->move($folder, $filename->getClientOriginalName());

		DB::table('barang')->insert([
            'gambar' => $filename->getClientOriginalName(),
			'kd_barang' => $request->no,
			'nama_barang' => $request->nama,
			'stok' => $request->stok,
			'harga' => $request->harga
		]);
        return redirect('/barang');
	}

	// Edit Data dari Database
    public function edit($id)
    {
        $barang = DB::table('barang')-> where('kd_barang', $id)->get();

        return view('edit_barang', ['barang' => $barang]);
    }

    // Update Data dari Database
    public function update(Request $request)
    {
        $gbr = $request->gambar;
        if ($gbr==Null){
            DB::table('barang')-> where('kd_barang', $request ->id)->update([
                // 'gambar' => $filename->getClientOriginalName(),
                'nama_barang' => $request -> nama,
                'stok' => $request -> stok,
                'harga' => $request -> harga
            ]);
        }else{
            $request->hasFile('gambar');
            $folder = "gambar";
            $filename = $request->file('gambar');
            $filename->move($folder, $filename->getClientOriginalName());
        }




        return redirect('/barang');
    }  

    // Hapus Data dari Database
    public function delete($id)
    {
        $data_barang =  DB::table('barang')-> where('kd_barang',$id)->first();
        File::delete(public_path('gambar').'/'.$data_barang->gambar);
        

        DB::table('barang')-> where('kd_barang',$id)->delete();
        return redirect('/barang');
    }

}
