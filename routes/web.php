<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\General;
use App\Http\Controllers\Home;
use App\Http\Controllers\KebutuhanPertanianController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\Penilai;

use App\Http\Controllers\UserController;
use App\Models\KebutuhanPertanian;
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



Route::post('/postlogin', [LoginController::class, 'postLogin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/', [Home::class, 'index']);


Route::get('/tentang_aplikasi', [Home::class, 'tentangAplikasi']);


Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
});

// GENERAL CONTROLLER ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:Administrator,investor,petani']], function () {

    Route::get('/dashboard', [General::class, 'dashboard']);
    Route::get('/profile', [General::class, 'profile']);
    Route::post('/update_user_profile', [General::class, 'updateUserProfile']);
    Route::get('/bantuan', [General::class, 'bantuan']);

    Route::post('/ubah_foto_profile', [General::class, 'ubahFotoProfile']);
    Route::post('/ubah_role', [General::class, 'ubahRole']);
});

// PETANI ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:petani']], function () {
    Route::group(['prefix' => 'petani'], function () {
        Route::get('/kebutuhan_pertanian', [KebutuhanPertanianController::class, 'index']);
        Route::get('/kebutuhan_pertanian/create', [KebutuhanPertanianController::class, 'create']);
        Route::get('/kebutuhan_pertanian/edit/{id}', [KebutuhanPertanianController::class, 'edit']);
        Route::post('/kebutuhan_pertanian', [KebutuhanPertanianController::class, 'store']);
        Route::put('/kebutuhan_pertanian', [KebutuhanPertanianController::class, 'update']);
        Route::delete('/kebutuhan_pertanian/delete/{id}', [KebutuhanPertanianController::class, 'delete']);
        Route::get('/modal', [ModalController::class, 'petani']);
    });
});


// INVESTOR ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:investor']], function () {
    Route::group(['prefix' => 'investor'], function () {
        Route::get('/modal', [ModalController::class, 'index']);
        Route::get('/modal/create', [ModalController::class, 'create']);
        Route::get('/modal/edit/{id}', [ModalController::class, 'edit']);
        Route::post('/modal', [ModalController::class, 'store']);
        Route::put('/modal', [ModalController::class, 'update']);
        Route::delete('/modal/delete/{id}', [ModalController::class, 'delete']);
        Route::get('/kebutuhan_pertanian', [KebutuhanPertanianController::class, 'investor']);
    });
});


// ADMIN ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:Administrator']], function () {
    Route::group(['prefix' => 'admin'], function () {
        // GET REQUEST
        Route::get('/pengguna', [Admin::class, 'pengguna']);
        Route::get('/fetch_data', [Admin::class, 'fetchData']);

        // CRUD PENGGUNA
        Route::post('/create_pengguna', [Admin::class, 'createPengguna']);
        Route::post('/update_pengguna', [Admin::class, 'updatePengguna']);
        Route::post('/delete_pengguna', [Admin::class, 'deletePengguna']);
    });
});
