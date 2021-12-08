<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\TemporadasController;

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

Route::get('/series', [SeriesController::class, 'index'])->name('index');
Route::get('/series/create', [SeriesController::class, 'create'])->name('criar-serie');
Route::post('/series/create', [SeriesController::class, 'store']);
Route::delete('/series/remove/{id}', [SeriesController::class, 'destroy'])->name('excluir-serie');
Route::get('/series/{id}/temporadas', [TemporadasController::class, 'index'])->name('temporadas');
Route::post('/series/{id}/alter', [SeriesController::class, 'alter']);