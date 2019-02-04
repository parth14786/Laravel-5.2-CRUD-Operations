<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\teman;
use Redirect;
class Proses extends Controller{
    public function delete($id){
    	$teman= teman::find($id);
    	$teman->delete();
    	return redirect()->action('Tampil@index');
    }
    public function edit(Request $request){
    	$id= $request->id;
    	$nama= $request->nama;
    	$alamat= $request->alamat;

    	$teman= teman::find($id);
    	$teman->nama= $nama;
    	$teman->alamat= $alamat;
    	$teman->save();
    	return redirect()->action('Tampil@index');
    }
    public function simpan(Request $request){
    	$teman= new teman;
    	$nama= $request->nama;
    	$alamat= $request->alamat;
    	$teman->nama= $nama;
    	$teman->alamat= $alamat;
    	$teman->save();
    	return redirect()->action('Tampil@index');
    }
}