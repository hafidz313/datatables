<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabelOtsukaController;

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
route::get('/tabel',[TabelOtsukaController::class,'index']);
Route::get('/tabel/tambah', [TabelOtsukaController::class, 'create']);
Route::post('/tabel/store', [TabelOtsukaController::class, 'store']);
Route::get('/tabel/edit/{id}', [TabelOtsukaController::class, 'edit']);
Route::put('/tabel/update/{id}', [TabelOtsukaController::class, 'update']);
Route::get('/tabel/hapus/{id}', [TabelOtsukaController::class, 'delete']);
Route::get('/tabel/destroy/{id}', [TabelOtsukaController::class, 'destroy']);
Route::get('/tabel/search', [TabelOtsukaController::class, 'search']);
