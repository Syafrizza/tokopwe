<?php

// nama :Syafrizza Aulia Marizky
// npm  : G1A020029
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SatuController;
use App\Http\Controllers\DuaController;
use App\Http\Controllers\TigaController;
use App\Http\Controllers\EmpatController;
use App\Http\Controllers\LimaController;
use App\Http\Controllers\EnamController;
use App\Http\Controllers\TujuhController;
use App\Http\Controllers\DelapanController;
use App\Http\Controllers\SembilanController;
use App\Http\Controllers\SepuluhController;

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

Route::get('/beranda', function () {
    echo ("Ini adalah Beranda");
});

Route::get('/profil', function () {
    echo ("Syafrizza Aulia Marizky");
});

Route::get('/profil/syafrizza', function () {
    echo ("Nama Syafrizza Aulia Marizky NPM G1020029");
});

Route::get('/awan', function () {
    echo ("awan itu putih");
});

Route::get('/daun', function () {
    echo ("Daun itu hijau");
});

Route::get('/profil/ayam', function () {
    echo ("ayam itu berkokok ngk bisa terbang");
});

Route::get('/kuchengoyen', function () {
    echo ("adalah ras terkuat");
});

Route::get('/payung', function () {
    echo ("Hati-hati dengan payung");
});

Route::get('/alamat', function () {
    echo ("Kapuas 4");
});

Route::get('/profil/hobi', function () {
    echo (" Main Musik ");
});

//route controller
Route::get('/Satu', [SatuController::class, 'Syafrizza']);
Route::get('/Dua', [DuaController::class, 'Syafrizza']);
Route::get('/Tiga', [TigaController::class, 'Syafrizza']);
Route::get('/Empat', [EmpatController::class, 'Syafrizza']);
Route::get('/Lima', [LimaController::class, 'Syafrizza']);
Route::get('/Enam', [EnamController::class, 'Syafrizza']);
Route::get('/Tujuh', [TujuhController::class, 'Syafrizza']);
Route::get('/Delapan', [DelapanController::class, 'Syafrizza']);
Route::get('/Sembilan', [SembilanController::class, 'Syafrizza']);
Route::get('/Sepuluh', [SepuluhController::class, 'Syafrizza']);
