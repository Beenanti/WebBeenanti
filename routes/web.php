<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PantiController;


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
    return view('index');
});
Route::get('/login',[AuthController::class, 'index'])->name('login');
Route::post('/login',[AuthController::class, 'checkLogin'])->name('checklogin');
Route::post('/logout',[AuthController::class, 'logout'])->name('logout');
// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::get('/registerAdmin', function () {
//     return view('auth.register-adminPanti');
// });

// Route::get('/listUser', function () {
//     return view('auth.list-user');
// });

Route::get('/listUser',[UsersController::class, 'index']);
Route::get('/listAdmin',[UsersController::class, 'indexAdmin']);
Route::get('/registerAdmin',function () {return view('auth.regisAdminMaster');});
Route::post('/auth/master/register',[UsersController::class, 'tambahAdmin']);
Route::get('/lihat-profil',[UsersController::class, 'lihatProfil']);

Route::get('/user/admin-panti',[UsersController::class, 'indexAdmin']);
Route::get('/registerAdminPanti',function () {return view('auth.register-adminPanti');});
Route::post('/user/admin-panti/register',[UsersController::class, 'tambahAdminPanti']);
Route::get('/user/admin-panti/{email}',[UsersController::class, 'detailAdminPanti']);
Route::get('/user/admin-panti/{email}',[UsersController::class, 'editAdminPanti']);
Route::patch('/user/admin-panti/{email}/edit',[UsersController::class, 'saveEditAdminPanti']);


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

Route::get('/panti',[PantiController::class, 'index']);
Route::get('/panti/add',[PantiController::class, 'add']);
Route::get('/panti/tambah',[PantiController::class, 'tambah']);
Route::get('/panti/detail/{id}',[PantiController::class, 'detail']);
Route::get('/panti/{id_panti}',[PantiController::class, 'edit']);
Route::patch('/panti/edit/{$id_panti}',[PantiController::class, 'saveEdit']);

Route::get('/tambahPanti', function () { 
    return view('panti.tambah-panti');
});
Route::get('/detailPanti', function () {
    return view('panti.detail-panti');
});
Route::get('/editPanti', function () {
    return view('panti.edit-panti');
});
