<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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

Route::get('/',[productController::class,'index']);
Route::get('/add',[productController::class,'add'])->name('add');
Route::post('/add',[productController::class,'insert'])->name('insert');
Route::get('/delete/{id}',[productController::class,'delete'])->name('delete');
Route::get('/edit/{id}',[productController::class,'edit'])->name('edit');
Route::post('/update/{id}',[productController::class,'update'])->name('update');

