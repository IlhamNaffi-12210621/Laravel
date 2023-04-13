<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function index(){

        $anggota = DB::table('anggota') ->get ();
        return view('master', ['anggota' => $anggota]);
    }
}


// ERROR

// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use illuminate\Support\Facades\DB;

// class AnggotaController extends Controller
// {
//     public function index(){
//         // memanggil table pada db
//         $anggota = DB::table('anggota') ->get();

//         // menampilkan parameter dari sebuah variable anggota
//         return view('master', ['anggota' => $anggota]);
//     }
// }
