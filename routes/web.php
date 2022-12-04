<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KantinController;
use App\Http\Controllers\MinumanController;

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
    return view('datakantin');
});

Route::get('/kantins',[ KantinController::class, 'index'] )->name('kantins');
Route::get('/tambahdatakantin',[ KantinController::class, 'tambahdatakantin'] )->name('tambahdatakantin');
Route::post('/tambahdatakantin',[ KantinController::class, 'insertdatakantin'] )->name('insertdatakantin');
// Route::post('/insertdatakantin',[ KantinController::class, 'tambahdatakantin'] )->name('insertdatakantin');

Route::get('/tampildatakantin/{id}',[ KantinController::class, 'tampildatakantin'] )->name('tampildatakantin');
Route::post('/updatedatakantin/{id}',[ KantinController::class, 'updatedatakantin'] )->name('updatedatakantin');


Route::get('/deletedatakantin/{id}',[ KantinController::class, 'deletedatakantin'] )->name('deletedatakantin');

//GK KEPAKE

Route::get('/adminminuman',[ MinumanController::class, 'adminminuman'] )->name('minum');
