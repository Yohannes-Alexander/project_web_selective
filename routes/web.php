<?php

use App\Http\Controllers\dashLowongan;
use App\Http\Controllers\dashUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pekerjaann;
use App\Http\Controllers\Pelamar;
use App\Http\Controllers\Testimonies;
use App\Http\Controllers\Testimony;

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
    return view('v_home');
});

Route::get('/home', function () {
    return view('v_home');
});

Route::get('/career', [Pekerjaann::class,'Pekerjaann']);
Route::get('/career/{pelamar:id}', [Pekerjaann::class,'Pekerjaan_detail']);
// Route::get('/dash_makanan', [Pekerjaann::class,'Pekerjaan_dash']);

Route::get('/makanan', function () {
    return view('v_makanan');
});

Route::get('/minuman', function () {
    return view('v_minuman');
});

Route::get('/bijih_kopi', function () {
    return view('v_bijih_kopi');
});

Route::get('/about', function () {
    return view('v_about');
});

Route::get('/career_detail', function () {
    return view('v_career_detail');
});

Route::get('/testimoni', function () {
    return view('v_testimony');
});
// Route::get('/testimoni', [Testimonies::class,'create']);

// Route::get('/dash_', [Pekerjaann::class,'Pekerjaann']);

Route::get('/dash_bijih_kopi', function () {
    return view('v_dash_bijih_kopi');
});

Route::get('/add_bijih_kopi', function () {
    return view('v_add_pelamar');
});

// Route::get('/dash_makanan', function () {
//     return view('v_dash_makanan');
// });

Route::get('/dash_minuman', function () {
    return view('v_dash_minuman');
});

Route::get('/dash_testimoni', function () {
    return view('v_dash_testimoni');
});

Route::resource('dash_makanan',dashLowongan::class);
Route::resource('dash_pelamar',Pelamar::class);
Route::resource('dash_testimoni',Testimony::class);
Route::resource('dash_user',dashUser::class);
Route::resource('testimoni',Testimonies::class);



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
