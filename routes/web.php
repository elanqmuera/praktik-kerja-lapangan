<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\PengajuanController;

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

//route pengajuan
//Route::get('/index',[App\Http\Controllers\PengajuanController::class,'index'])

//Route::controller(PengajuanControler::class)->group(function() {
   // Route::get('pengajuan','index')->name('pengajuan.index');
   // Route::post('pengajuan/store','store')->name('pengajuan.store');
//});

Auth::routes();

Route::post('/pengajuan',[App\Http\Controllers\PengajuanController::class,'index'])->name('pengajuan');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',[App\Http\Controllers\UserController::class, 'index'])->name('dashboard');

