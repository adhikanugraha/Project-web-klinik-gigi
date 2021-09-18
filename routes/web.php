<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\LayananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/layanan','LayananController@index');
// Route::get('/input_data_pasien',function(){
//      return view('input_data_pasien');
// });
Route::get('/data_pendaftar','PendaftarController@index');
Route::get('/input_data_pasien','PendaftarController@layanan');
Route::get('/tambah_pendaftar','PendaftarController@create');
Route::post('/data_pendaftar','PendaftarController@store');


