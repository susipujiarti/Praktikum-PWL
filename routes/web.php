<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

use Illuminate\Support\Facades\Route;

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
    return view('welcome',[
        'isi_data' => 'Halaman Awal'
    ]);
});
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('create');
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('store');
Route::post('/mahasiswa/edit/{id_mahasiswa}', [MahasiswaController::class, 'edit'])->name('edit');
Route::put('/mahasiswa/update/{id_mahasiswa}', [MahasiswaController::class, 'update'])->name('update');
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen/create', [DosenController::class, 'create']);

