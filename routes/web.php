<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

// return view('welcome');
Route::get('/', [PostController::class, 'index']);
Route::post('/store', [PostController::class, 'store'])->name('store');
Route::get('edit/{id}', [PostController::class, 'edit'])->name('edit');
Route::post('update/{id}', [PostController::class, 'update'])->name('update');
Route::get('delete/{id}', [PostController::class, 'destroy'])->name('delete');
