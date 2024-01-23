<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\MapelController;

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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::middleware(['auth', 'revalidate'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/data-tamu', [TamuController::class, 'create'])->name('data-tamu');
});

Route::middleware(['auth','auth.guru', 'revalidate'])->group(function () {
    Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index'])->name('guru');
    Route::post('/detail-guru', [GuruController::class, 'create'])->name('detailGuru');
});

Route::middleware(['auth', 'auth.admin', 'revalidate'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    // Route::get('/admin/guru', [App\Http\Controllers\AdminController::class, 'viewGuru'])->name('admin.guru');
    Route::post('/admin/guru', [App\Http\Controllers\AdminController::class, 'addGuru'])->name('admin.addGuru');
    Route::post('/admin/guru/update-guru', [App\Http\Controllers\AdminController::class, 'updateGuru'])->name('admin.updateGuru');
    Route::get('/admin/guru/{email}', [App\Http\Controllers\AdminController::class, 'deleteGuru'])->name('admin.deleteGuru');
    
    Route::get('/admin/mapel', [MapelController::class, 'show'])->name('mapel');
    Route::post('/admin/mapel/add', [MapelController::class, 'create'])->name('admin.mapel');
    Route::post('/admin/mapel/update', [MapelController::class, 'update'])->name('update.mapel');
    Route::get('/admin/mapel/delete/{nama}', [MapelController::class, 'destroy'])->name('delete.mapel');
});