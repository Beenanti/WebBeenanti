<?php

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


Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/registerAdmin', function () {
    return view('auth.register-adminPanti');
});
Route::get('/listUser', function () {
    return view('auth.list-user');
});
Route::get('/listadmin', function () {
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

Route::get('/listPanti', function () {
    return view('panti.list-panti');
});
Route::get('/tambahPanti', function () {
    return view('panti.tambah-panti');
});
Route::get('/detailPanti', function () {
    return view('panti.detail-panti');
});
Route::get('/editPanti', function () {
    return view('panti.edit-panti');
});
