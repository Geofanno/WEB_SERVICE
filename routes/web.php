<?php
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SoalController;
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

Route::get('/', 'App\Http\Controllers\PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('master', 'template/master');

//route untuk mahasiswa
Route::get('data-mahasiswa', [MahasiswaController::class, 'index']);
Route::get('add-mahasiswa', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('save-mahasiswa',[MahasiswaController::class, 'ambilData'])->name('mahasiswa.save-mahasiswa');
Route::delete('delete-mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');
Route::get('edit-mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('edit-mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
//route untuk Soal
Route::get('info-soal', [SoalController::class, 'index']);
Route::get('add-soal', [SoalController::class, 'create'])->name('soal.create');
Route::post('save-soal',[SoalController::class, 'ambilData'])->name('soal.save-soal');
Route::delete('delete-soal/{id}', [SoalController::class, 'destroy'])->name('soal.delete');
Route::get('edit-soal/{id}/edit', [SoalController::class, 'edit'])->name('soal.edit');
Route::put('edit-soal/{id}', [SoalController::class, 'update'])->name('soal.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
