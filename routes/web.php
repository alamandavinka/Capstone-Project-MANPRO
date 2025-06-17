<?php

use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// //127.0.0.1:8000/ ==> view welcome
// Route::get('/', function () {
//     return view('welcome');
// });

// //127.0.0.1:8000/mahasiswa ==> halaman mahasiswa
// Route::get('/mahasiswa', function () {
//     return "<h1>HALAMAN mahasiswa<h1>";
// });

// //127.0.0.1:8000/mahasiswa/id ==> halaman mahasiswa dengan id, misal 27.0.0.1:8000/mahasiswa/1 ==> halaman mahasiswa 1
// Route::get('/mahasiswa/{id}', function ($id) {
//     return "<h1>HALAMAN mahasiswa dengan id $id<h1>";
// })->where('id','[0-9]+');

// Route::get('/mahasiswa/{id}/{nama}', function ($id,$nama) {
//     return "<h1>HALAMAN mahasiswa dengan id $id dan nama $nama<h1>";
// })->where(['id' => '[0-9]+', 'nama' => '[A-Za-z]+']);

// Route::get('/mahasiswa', [mahasiswaController::class,'index']);
// Route::get('/mahasiswa/{id}', [mahasiswaController::class,'detail'])->where('id','[0-9]+');

Route::resource('mahasiswa',mahasiswaController::class)->middleware('isLogin');

Route::get('/', [HalamanController::class,'index']);
Route::get('/graduation', [HalamanController::class,'graduation']);
Route::get('/parentprofil', [HalamanController::class,'parentprofil']);
Route::get('/sesi',[SessionController::class, 'index'])->middleware('isTamu');
Route::post('/sesi/login',[SessionController::class, 'login'])->middleware('isTamu');
Route::post('/sesi/logout',[SessionController::class, 'logout']);

Route::get('/sesi/register',[SessionController::class, 'register'])->middleware('isTamu');
Route::post('/sesi/create',[SessionController::class, 'create'])->middleware('isTamu');

Route::get('/',function(){
    return view('sesi/welcome');
})->middleware('isTamu');