<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\FileController;
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

// FRONT
Route::get('/', [AllController::class, 'home'])->name('home');

// BACK
// READ
Route::get('/admin', [FileController::class, 'index'])->name('admin');

// CREATE
Route::get('/create/file', [FileController::class, 'create'])->name('create.file');
Route::post('/store/file', [FileController::class, 'store'])->name('store.file');

// DELETE
Route::delete('/delete/{id}', [FileController::class, 'destroy'])->name('destroy.file');
