<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnounceController;


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

Route::group(['prefix' => 'announces', 'as' => 'announces.'], function(){
    Route::get('/', [AnnounceController::class, 'index'])->name('home');
});
Route::get('/', [AnnounceController::class, 'index'])->name('home');
Route::get('/buat', [AnnounceController::class, 'create'])->name('announces.tambah-data');
Route::post('/buat-data', [AnnounceController::class, 'store'])->name('announces.buat-data');
Route::get('/edit/{id}', [AnnounceController::class, 'edit'])->name('announces.edit');