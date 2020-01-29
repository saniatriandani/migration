<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', 'petugasController@register');
Route::post('login', 'petugasController@login');

Route::get('/', function(){
    return Auth::user()->level;
})->middleware('jwt.verify');

Route::get('user', 'petugasController@getAuthenticatedUser')->middleware('jwt.verify');

Route::get('/index', 'bukuController@index')->middleware('jwt.verify');
Route::post('/simpan', 'bukuController@store')->middleware('jwt.verify');
Route::put('/ubah/{id}', 'bukuController@update')->middleware('jwt.verify');
Route::delete('/hapus/{id}', 'bukuController@destroy')->middleware('jwt.verify');
Route::get('/tampil', 'bukuController@tampil')->middleware('jwt.verify');

Route::get('/index_anggota', 'anggotaController@index')->middleware('jwt.verify');
Route::post('/simpan_anggota', 'anggotaController@store')->middleware('jwt.verify');
Route::put('/ubah_anggota/{id}', 'anggotaController@update')->middleware('jwt.verify');
Route::delete('/hapus_anggota/{id}', 'anggotaController@destroy')->middleware('jwt.verify');
Route::get('/tampil_anggota', 'anggotaController@tampil')->middleware('jwt.verify');