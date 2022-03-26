<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabelController;

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

Route::get('/', [TabelController::class, 'index'])->name('tabel');
Route::get('/tabel/add', [TabelController::class, 'add']);
Route::get('/tabel/edit/{id_tabel}', [TabelController::class, 'edit']);
Route::post('/tabel/insert', [TabelController::class, 'insert']);
Route::post('/tabel/update/{id_tabel}', [TabelController::class, 'update']);
