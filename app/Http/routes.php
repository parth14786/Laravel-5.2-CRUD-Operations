<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//tampilan
Route::get('/', 'Tampil@index');
Route::get('/tambah', 'Tampil@tambah');
Route::get('/perbarui/{id}', 'Tampil@perbarui');

//proses
Route::get('/hapus/{id}', 'Proses@delete');
Route::get('/simpan', 'Proses@simpan');
Route::get('/edit/{id}', 'Proses@edit');

// Route::get('/coba', function(){	
// 	$teman = DB::table('temans')->paginate(3);
// 	return view('coba', ['teman' => $teman]);
// });
Route::get('/coba','Tampil@coba');

#01 Operdata
Route::get('/operdata', 'Operdata@coba1');
Route::get('/operdata/coba2', 'Operdata@coba2');
Route::get('/operdata/coba3', 'Operdata@coba3');
Route::get('/operdata/coba4', 'Operdata@coba4');
Route::get('/operdata/coba5', 'Operdata@coba5');

#02 Templating
Route::get('templating', 'Templating@coba1');
Route::get('templating/coba2', 'Templating@coba2');
Route::get('templating/coba3', 'Templating@coba3');
