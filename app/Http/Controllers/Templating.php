<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Templating extends Controller{
    public function coba1(){
    	$nama= '<strong>tegar</strong>';
    	return view('templating/coba1', compact('nama'));
    }
    public function coba2(){
    	return view('templating/coba2');
    }
    public function coba3(){
    	$datas= ['tegar', 'swasono', 'tatag'];
    	return view('templating/coba3')->with('datas', $datas);
    }
}
