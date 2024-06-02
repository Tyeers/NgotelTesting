<?php

use App\Http\Controllers\KategoriController;
use App\Models\booking;
use App\Models\Kategori;
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
    return view('pelangganView.dashboard');
});

Route::get(view('/kategori.index'));
Route::resource('kategori', KategoriController::class);
