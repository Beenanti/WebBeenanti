<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PantiController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\RelawanController;
use App\Http\Controllers\KaryaController;
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
/*
|--------------------------------------------------------------------------
| Web Routes User
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('index');
});
// Route::get('/pantiweb', function () {
//     return view('pantiweb');
// });
Route::get('/pantiweb', [PantiController::class, 'pantiweb'])->name('pantiweb');
Route::get('/pantiweb/{id}', [PantiController::class, 'detailpantiweb']);

Route::post('/registerUser', [AuthController::class, 'registerUser']);
Route::get('/donasi/{id}', [DonasiController::class, 'index']);
Route::post('/donasi/tambah', [DonasiController::class, 'tambah']);
Route::get('/relawan/{id}', [RelawanController::class, 'index']);
Route::post('/relawan/tambah', [RelawanController::class, 'tambah']);
Route::get('/kunjungan/{id}', [KunjunganController::class, 'index']);
Route::post('/kunjungan/tambah', [KunjunganController::class, 'tambah']);
Route::get('/karya/{id}', [KaryaController::class, 'index']);
Route::get('/riwayatDonasi', [DonasiController::class, 'riwayat'])->name('riwayatDonasi');
Route::get('/riwayatRelawan', [RelawanController::class, 'riwayat'])->name('riwayatRelawan');
Route::get('/riwayatKunjungan', [KunjunganController::class, 'riwayat'])->name('riwayatKunjungan');
/*
|--------------------------------------------------------------------------
| END Web Routes User
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'checkLogin'])->name('checklogin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::get('/registerAdmin', function () {
//     return view('auth.register-adminPanti');
// });

// Route::get('/listUser', function () {
//     return view('auth.list-user');
// });

//Route::get('/listUser', [UsersController::class, 'index'])->name('list-user');
Route::get('/register-userweb', function () {
    return view('auth.register-userweb');
});
Route::get('/listAdmin', [UsersController::class, 'indexAdmin']);
Route::get('/registerAdmin', function () {
    return view('auth.regisAdminMaster');
});
Route::post('/auth/master/register', [UsersController::class, 'tambahAdmin']);
Route::get('/lihat-profil', [UsersController::class, 'lihatProfil']);

Route::get('/user/admin-panti', [UsersController::class, 'indexAdmin']);
Route::get('/registerAdminPanti', function () {
    return view('auth.register-adminPanti');
});
Route::post('/user/admin-panti/register', [UsersController::class, 'tambahAdminPanti']);
Route::get('/user/admin-panti/{email}', [UsersController::class, 'detailAdminPanti']);
Route::get('/user/admin-panti/{email}', [UsersController::class, 'editAdminPanti']);
Route::patch('/user/admin-panti/{email}/edit', [UsersController::class, 'saveEditAdminPanti']);


Route::get('/listAdmin', function () {
    return view('auth.list-adminPanti');
});
Route::get('/detail-admin', function () {
    return view('auth.detail-adminPanti');
});
Route::get('/edit-admin', function () {
    return view('auth.edit-adminPanti');
});
Route::get('/lihat-profil', function () {
    return view('auth.lihat-profil');
});
Route::get('/edit-profil', function () {
    return view('auth.edit-profil');
});
Route::get('/regis-adminMaster', function () {
    return view('auth.regisAdminMaster');
});

//Route::get('/panti', [PantiController::class, 'index']);
Route::get('/tambahPanti', [PantiController::class, 'getTambah']);
Route::post('/panti/tambah', [PantiController::class, 'tambah']);
Route::get('/panti/detail/{id}', [PantiController::class, 'detail']);
Route::get('/panti/{id_panti}', [PantiController::class, 'edit']);
Route::patch('/panti/edit/{id_panti}', [PantiController::class, 'saveEdit']);

Route::get('/detailPanti', function () {
    return view('panti.detail-panti');
});
Route::get('/editPanti', function () {
    return view('panti.edit-panti');
});
