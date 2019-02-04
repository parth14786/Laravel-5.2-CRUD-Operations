<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
class Operdata extends Controller{
    public function coba1(){
    	$nama= 'tegar';
    	return view('oper/coba1')->with('nama', $nama);
    }
    #01 cara 1
    public function coba2(){
    	$nama= 'tegar';
    	$alamat= 'malang';
    	return view('oper/coba2')->with([
    			'nama'=> $nama,
    			'alamat'=> $alamat
    		]);
    }
    #02 cara 2
    public function coba3(){
    	$data['nama']= 'tegar';
    	$data['alamat']= 'malang';
    	return view('oper/coba3')->with('data', $data);
    }
    #03 cara 3
    public function coba4(){
    	$nama= 'tegar';
    	$alamat= 'malang';
    	return view('oper/coba4')->with('data', compact('nama', 'alamat'));
    }
    #04 cara 4
    public function coba5(){
    	$nama= 'tegar';
    	$alamat= 'malang';
    	return view('oper/coba5', compact('nama', 'alamat'));
    }
}