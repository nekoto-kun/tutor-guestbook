<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\CategoryController;
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
    return view('home');
})->name('home');

Route::resource('/guests', GuestController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/biodata', [BiodataController::class, 'show'])->name('biodata.show');
Route::get('/biodata/edit', [BiodataController::class, 'edit'])->name('biodata.edit');
Route::put('/biodata/edit', [BiodataController::class, 'update'])->name('biodata.update');

Route::resource('categories', CategoryController::class);
