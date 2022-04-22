<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;

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
Route ::get('/', function () {
    if(session()->has('email')){
        return redirect('/dashboard');
    }
   
   return view('login');
});
Route::get('/dashboard',[productController::class,'index']);
Route::get('/add',[productController::class,'add'])->name('add');
Route::post('/add',[productController::class,'insert'])->name('insert');
Route::get('/delete/{id}',[productController::class,'delete'])->name('delete');
Route::get('/edit/{id}',[productController::class,'edit'])->name('edit');
Route::post('/update/{id}',[productController::class,'update'])->name('update');
Route::post('/login',[userController::class,'userLogin'])->name('login');
Route::get('/logout',[userController::class,'logout'])->name('logout');

