<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function  index(Request $request) {

        if ($request->session()->has('nama')) {
            echo $request->session()->get('nama');
        } 
        else {
            echo "tidak ada data session";
        }
    }

    public function buat(Request $request) {

        $cekuser = DB::table('user')->where('username', $request->username)->where('password', $request->password)->get();

        foreach ($cekuser as $p) {
            echo "username :" . $p->username;
            echo "<br>password :" . $p->password;
            echo "<br>";
        }

        if (empty($p->username)) {
            echo "<alert>USERNAME DAN PASSWORD SALAH!</alert>";
        } 
        else {
            $request->session()->put('nama', $p->username);
            $request->session()->put('id', $p->id_user);

            return redirect('/barang');
        }
    }
    
    public function hapus(Request $request)
    {
        $request->session()->forget('nama');
        echo " data session sudah di hapus";
    }
}