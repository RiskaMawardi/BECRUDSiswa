<?php

use App\Http\Controllers\Siswacontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/siswa',[Siswacontroller::class,'index']);
Route::post('/siswa/create',[Siswacontroller::class,'store']);
Route::get('/siswa/show/{id_siswa}',[Siswacontroller::class,'show']);
Route::put('/siswa/update/{id_siswa}',[Siswacontroller::class,'update']);
Route::get('/siswa/destroy/{id_siswa}', [Siswacontroller::class,'destroy']);

//getdata
Route::get('/getData/{id_siswa}',[Siswacontroller::class,'getData']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
