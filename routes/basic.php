<?php

use App\Http\Controllers\Login;
use App\Http\Controllers\Tambah;
use App\Http\Controllers\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabelController;

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

// Route::get('/', function () {
//     return view('login');
// });
Route::get('/', [Login::class, 'index']);
Route::post('/', [Login::class, 'store']);

Route::get('/register', [Register::class, 'index']);
Route::post('/register', [Register::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/tabel', [TabelController::class, 'tabel'])->name('tabel');
Route::get('/tambah',[TabelController::class, 'tambah'])->name('tambah');
Route::post('/insert',[TabelController::class, 'insert'])->name('insert');
// 
Route::get('/edit/{id}',[TabelController::class, 'edit'])->name('edit');
// 
Route::post('/ubah/{id}',[TabelController::class, 'ubah'])->name('ubah');
// 
Route::get('/hapus/{id}',[TabelController::class, 'hapus'])->name('hapus');