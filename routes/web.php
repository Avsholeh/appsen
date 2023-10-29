<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/jabatan', JabatanController::class)->names([
        'index' => 'jabatan.index',
        'store' => 'jabatan.store',
        'edit' => 'jabatan.edit',
        'update' => 'jabatan.update',
        'destroy' => 'jabatan.destroy',
    ]);

    Route::resource('/departemen', DepartemenController::class)->names([
        'index' => 'departemen.index',
        'store' => 'departemen.store',
        'edit' => 'departemen.edit',
        'update' => 'departemen.update',
        'destroy' => 'departemen.destroy',
    ]);

    Route::resource('/absensi', AbsensiController::class)->names([
        'index' => 'absensi.index',
        'store' => 'absensi.store',
        'edit' => 'absensi.edit',
        'update' => 'absensi.update',
        'destroy' => 'absensi.destroy',
    ]);
});
