<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservasiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//landing
Route::get('/landing',[LandingController::class, 'landing'])->name('landing');
Route::get('/tentangkami',[LandingController::class, 'tentangkami'])->name('tentangkami');
Route::get('/fasilitas',[LandingController::class, 'fasilitas'])->name('fasilitas');
Route::get('/harga',[LandingController::class, 'harga'])->name('harga');
Route::get('/katalog',[LandingController::class, 'katalog'])->name('katalog');

Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');

//login
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/action-login', [LoginController::class, 'actionlogin'])->name('action-login');

//logout
Route::get('/action-logout',[LoginController::class, 'actionLogout'])->name("action-logout");

//register
Route::post('/action-daftar', [LoginController::class, 'actiondaftar'])->name('action-daftar');
Route::get('/register',[LoginController::class, 'register'])->name('register');

//admin
Route::get('/tabeladmin', [UserController::class, 'tabeladmin'])->name('tabeladmin');
Route::get('/editadmin/{id}', [UserController::class, 'edit_admin'])->name('editadmin');
Route::post('/editadmin/{id}', [UserController::class, 'update_admin'])->name('updateadmin');
Route::delete('/hapusadmin/{id}', [UserController::class, 'hapusadmin'])->name('hapusadmin');
Route::get('/formadmin',[UserController::class, 'tambahadmin'])->name("formadmin");
Route::post('/tableadmin', [UserController::class, 'insertadmin'])->name('insertadmin');

//manager
Route::get('/tabelmanager', [UserController::class, 'tabelmanager'])->name('tabelmanager');
Route::get('/editmanager/{id}', [UserController::class, 'edit_manager'])->name('editmanager');
Route::post('/editmanager/{id}', [UserController::class, 'update_manager'])->name('updatemanager');
Route::delete('/hapusmanager/{id}', [UserController::class, 'hapusadmin'])->name('hapusmanager');
Route::get('/formmanager',[UserController::class, 'tambahmanager'])->name("formmanager");
Route::post('/tablemanager', [UserController::class, 'insertmanager'])->name('insertmanager');

//pelanggan
Route::get('/tabelpelanggan', [UserController::class, 'tabelpelanggan'])->name('tabelpelanggan');
Route::get('/editpelanggan/{id}', [UserController::class, 'edit_pelanggan'])->name('editpelanggan');
Route::post('/editpelanggan/{id}', [UserController::class, 'update_pelanggan'])->name('updatepelanggan');
Route::delete('/hapuspelanggan/{id}', [UserController::class, 'hapuspelanggan'])->name('hapuspelanggan');

//meja
Route::get('/tabelmeja',[MejaController::class, 'tabelmeja'])->name("tabelmeja");
Route::get('/formmeja',[MejaController::class, 'formmeja'])->name("formmeja");
Route::post('/table', [MejaController::class, 'insertdata'])->name('insertdata');
Route::delete('/hapusmeja/{id}', [MejaController::class, 'hapusmeja'])->name('hapusmeja');
Route::get('/editmeja/{id}', [MejaController::class, 'edit_meja'])->name('editmeja');
Route::post('/editmeja/{id}', [MejaController::class, 'update_meja'])->name('updatemeja');

//paket
Route::get('/tabelpaket', [PaketController::class, 'tabelpaket'])->name('tabelpaket');
Route::get('/formpaket',[PaketController::class, 'formpaket'])->name("formpaket");
Route::post('/tablepaket', [PaketController::class, 'insertpaket'])->name('insertpaket');
Route::delete('/hapuspaket/{id}', [PaketController::class, 'hapuspaket'])->name('hapuspaket');
Route::get('/editpaket/{id}', [PaketController::class, 'edit_paket'])->name('editpaket');
Route::post('/editpaket/{id}', [PaketController::class, 'update_paket'])->name('updatepaket');
Route::get('/format_rupiah', [PaketController::class, 'format_rupiah'])->name('format_rupiah');

//reservasi
Route::get('/tabelreservasi', [ReservasiController::class, 'tabelreservasi'])->name('tabelreservasi');
Route::get('/formreservasi',[ReservasiController::class, 'formreservasi'])->name("formreservasi");
Route::get('/insertreservasi',[ReservasiController::class, 'store'])->name("insertreservasi");