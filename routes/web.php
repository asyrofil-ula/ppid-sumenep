<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAuth;
use App\Http\Controllers\AuthController;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\DestroyController;
use App\Http\Controllers\DocumentController;

// User
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/visi-misi', [UserController::class, 'visi_misi'])->name('visi-misi');
Route::get('/tentang-ppid', [UserController::class, 'tentang_ppid'])->name('tentang-ppid');
Route::get('/dasar-hukum', [UserController::class, 'dasar_hukum'])->name('dasar-hukum');
Route::get('/tugas-dan-fungsi-ppid-sumenep', [UserController::class, 'tugas_dan_fungsi_ppid_sumenep'])->name('tugas-dan-fungsi-ppid-sumenep');
Route::get('/struktural-organisasi', [UserController::class, 'struktural_organisasi'])->name('struktural-organisasi');
Route::get('/maklumat-pelayanan', [UserController::class, 'maklumat_pelayanan'])->name('maklumat-pelayanan');
Route::get('/prosedur-permintaan-informasi-ppid-sumenep', [UserController::class, 'prosedur_permintaan_informasi_ppid_sumenep'])->name('prosedur-permintaan-informasi-ppid-sumenep');
Route::get('/prosedur-pengajuan-keberatan-ppid-sumenep', [UserController::class, 'prosedur_pengajuan_keberatan_ppid_sumenep'])->name('prosedur-pengajuan-keberatan-ppid-sumenep');
Route::get('/prosedur-sengketa-informasi-ppid-sumenep', [UserController::class, 'prosedur_sengketa_informasi_ppid_sumenep'])->name('prosedur-sengketa-informasi-ppid-sumenep');
Route::get('/informasi-publik/{id}/detail', [UserController::class, 'informasi_publik_detail'])->name('informasi-publik-detail');

Route::get('/infografis-ppid', [UserController::class, 'infografis_user'])->name('infografis-ppid');
Route::get('/galeri-ppid', [UserController::class, 'galeri'])->name('galeri');
Route::get('pengembang-ppid', [UserController::class, 'pengembang_ppid'])->name('pengembang-ppid');


// Auth
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerSubmit'])->name('register.submit');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// showfile
Route::get('/informasi-publik/{id}/file', [DocumentController::class, 'showFile_informasi_publik'])->name('informasi-publik-file');
Route::get('/infografis/{id}/file', [DocumentController::class, 'showFile_infografis'])->name('infografis-file');
Route::get('/file-informasi-publik/{id}/file', [DocumentController::class, 'showFile_file_informasi_publik'])->name('file-informasi-publik-file');

Route::get('/ppid-desa', function () {
    Alert::info('Peringatan', 'Halaman belum tersedia, silahkan hubungi admin untuk informasi lebih lanjut');
    return back();
})->name('ppid-desa');

// check auth
Route::middleware(CheckAuth::class, 'auth')->group(function () {
    // servant
    Route::get('/infografis', [UserController::class, 'infografis'])->name('infografis');
    Route::get('/informasi-publik', [UserController::class, 'informasi_publik'])->name('informasi-publik');
    Route::get('/aplikasi-layanan-publik', [UserController::class, 'aplikasi_layanan_publik'])->name('aplikasi-layanan-publik');
    Route::get('/detail-informasi-publik', [UserController::class, 'detail_informasi_publik'])->name('detail-informasi-publik');
    Route::get('/file-publik', [UserController::class, 'file_informasi_publik'])->name('file-publik');

    // store
    Route::post('/informasi-publik/store', [StoreController::class, 'store_informasi_public'])->name('informasi-public.store');
    Route::post('/informasi-publik-detail/store', [StoreController::class, 'store_informasi_public_detail'])->name('informasi-public-detail.store');
    Route::post('/infografis/store', [StoreController::class, 'store_infografis'])->name('infografis.store');
    Route::post('/aplikasi-layanan-publik/store', [StoreController::class, 'store_aplikasi_layanan_publik'])->name('aplikasi-layanan-publik.store');
    Route::post('/file-informasi-publik/store', [StoreController::class, 'store_file_informasi_publik'])->name('file-informasi-publik.store');

    // destroy
    Route::get('/informasi-publik/admin', function () {
        Alert::info('Peringatan', 'Hapus hanya bisa dilakukan oleh admin, hubungi admin untuk menghapus data');
        return back();
    })->name('informasi-public.destroy');
    Route::get('/informasi-publik-detail/admin', function () {
        Alert::info('Peringatan', 'Hapus hanya bisa dilakukan oleh admin, hubungi admin untuk menghapus data');
        return back();
    })->name('informasi-public-detail.destroy');
    Route::get('/file-informasi-publik/admin', function () {
        Alert::info('Peringatan', 'Hapus hanya bisa dilakukan oleh admin, hubungi admin untuk menghapus data');
        return back();
    })->name('file-informasi-publik.destroy');
    Route::get('/infografis/admin', function () {
        Alert::info('Peringatan', 'Hapus hanya bisa dilakukan oleh admin, hubungi admin untuk menghapus data');
        return back();
    })->name('infografis.destroy');
    Route::get('/aplikasi-layanan-publik/admin', function () {
        Alert::info('Peringatan', 'Hapus hanya bisa dilakukan oleh admin, hubungi admin untuk menghapus data');
        return back();
    })->name('aplikasi-layanan-publik.destroy');

    // edit 
    Route::get('/informasi-publik/edit/admin', function () {
        Alert::info('Peringatan', 'Edit hanya bisa dilakukan oleh admin, hubungi admin untuk mengubah data');
        return back();
    })->name('informasi-publik.edit');
    Route::get('/infografis/edit/admin', function () {
        Alert::info('Peringatan', 'Edit hanya bisa dilakukan oleh admin, hubungi admin untuk mengubah data');
        return back();
    })->name('infografis.edit');
    Route::get('/aplikasi-layanan-publik/edit/admin', function () {
        Alert::info('Peringatan', 'Edit hanya bisa dilakukan oleh admin, hubungi admin untuk mengubah data');
        return back();
    })->name('aplikasi-layanan-publik.edit');

    // comingsoon
    Route::get('/profile', function () {
        Alert::info('Peringatan', 'Edit profile hanya bisa dilakukan oleh admin, hubungi admin untuk mengubah profile');
        return back();
    })->name('profile');
});
