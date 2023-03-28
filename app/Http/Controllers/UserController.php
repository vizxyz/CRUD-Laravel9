<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
	// Menampilkan Database
   	public function index()
	{
		$data_user = DB::table('user')->get();
		
		return view('user',['data_user'=>$data_user]);
   	}

   	// Menambahkan Data ke Database
   	public function store(Request $request)
	{
		DB::table('user')->insert([
			'id_user' => $request->no,
			'Nama_user' => $request->nama,
			'username' => $request->username,
			'password' => $request->password
		]);
        return redirect('/user');
	}

	// Edit Data dari Database
    public function edit($id)
    {
        $data_user = DB::table('user')-> where('id_user', $id)->get();

        return view('edit_user', ['user' => $data_user]);
    }

	// Update Data dari Database
    public function update(Request $request)
    {
		DB::table('user')-> where('id_user', $request ->id)->update([
		'Nama_user' => $request -> nama,
		'username' => $request -> username,
		'password' => $request -> password,
		]);

		return redirect('/user');
    } 
     
	// Hapus Data dari Database
    public function delete($id)
	{
		DB::table('user')-> where('id_user',$id)->delete();

		return redirect('/user');
	}

}