<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');

Route::get('/tambahMahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');

Route::post('/insertData', [MahasiswaController::class, 'insertData'])->name('insertData');

Route::get('/tampilData/{id}', [MahasiswaController::class, 'tampilData'])->name('tampilData');

Route::post('/updateData/{id}', [MahasiswaController::class, 'updateData'])->name('updateData');

Route::get('/delete/{id}', [MahasiswaController::class, 'delete'])->name('delete');

