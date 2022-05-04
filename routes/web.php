<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PesanhotelController;
use App\Http\Controllers\FotogalleryController;
use App\Http\Controllers\CetakController;

use GuzzleHttp\Middleware;

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
Route::get('/pesan', function () {
    return view('pesan');
});
Route::get('/downloadpdf', function () {
    return view('Download.downloadpdf');
});
// Route::resource('message', MessageController::class);
// Route::get('/cetakpdf',[CetakController::class,'cetakpdf'])->name('cetakpdf');

Route::post('/tambahpengguna',[PenggunaController::class,'tambahpengguna'])->name('tambahpengguna');
Route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
Route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
Route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
// Route::post('/indexlogin',[LoginController::class,'postlogin'])->name('indexlogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'ceklevel:admin,karyawan']], function() {
    Route::get('/home',[HomeController::class,'index'])->name('home');
});

// Route::group(['middleware' => ['auth', 'ceklevel:admin,karyawan']], function() {
//     Route::get('/message',[MessageController::class,'index'])->name('message');
//     Route::post('/',[MessageController::class,'welcome'])->name('message');
// });

// Route::group(['middleware' => ['auth', 'ceklevel:admin,karyawan']], function() {
//     Route::resource('tamu', TamuController::class);
// });
Route::resource('tamu', TamuController::class);
Route::resource('message', MessageController::class);
Route::resource('fasilitas', FasilitasController::class);
Route::resource('layanan', LayananController::class);
Route::resource('pengguna', PenggunaController::class);
Route::resource('/', WelcomeController::class);
Route::resource('sidebar', SidebarController::class);
Route::resource('perusahaan', PerusahaanController::class);
Route::resource('pemesan', PemesanController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('pesanhotel', PesanhotelController::class);
Route::resource('galleryfoto', FotogalleryController::class);