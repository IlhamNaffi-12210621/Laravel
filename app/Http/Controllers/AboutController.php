<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){

        $data = [
            'nim' => '12210621',
            'nama' => 'Ilham Naffi',
            'alamat' => 'Pontianak',
            'email' => 'Naffiilham@gmail.com',
            'nohp' => '085845530771',
        ];
        return view('about', $data);
    }
}
