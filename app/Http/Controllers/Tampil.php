<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\teman;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;
class Tampil extends Controller{
    public function index(){
    	//$teman= teman::all();
        $teman= DB::table('temans')->paginate(3);
    	return view('home', compact('teman'));
    }
    public function perbarui($id){
    	$teman= teman::find($id);
    	return view('perbarui', compact('teman'));
    }
    public function tambah(){
    	return view('tambah');
    }
    public function coba(){
        $users = DB::table('temans')->paginate(3);
        return view('coba', ['users' => $users]);
    }
}