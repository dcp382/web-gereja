<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::group(['prefix' => 'jemaat', 'middleware' => 'auth'], function () {
    Route::get('/', [\App\Http\Controllers\JemaatController::class, 'index'])->name('jemaat.index');
    Route::get('/tambah',[\App\Http\Controllers\JemaatController::class,'tambah'])->name('jemaat.tambah');
    Route::get('/masuk',[\App\Http\Controllers\JemaatController::class,'masuk'])->name('jemaat.masuk');
    Route::get('/hapus',[\App\Http\Controllers\JemaatController::class,'hapus'])->name('jemaat.hapus');
    Route::get('/detail/{id}',[\App\Http\Controllers\JemaatController::class,'detail'])->name('jemaat.detail');
    Route::get('/edit/{id}',[\App\Http\Controllers\JemaatController::class,'edit'])->name('jemaat.edit');
});
