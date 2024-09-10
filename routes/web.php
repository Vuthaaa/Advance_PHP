<?php

use App\Http\Controllers\CategoryController;
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

// Route::get('/', function () {
//     return view('master.layout');
// });

Route::get('/', function () {
    return view('home.home');
});

// Route::get('/category', function () {
//     return view('category.list');
// });

Route::get('/category' , [CategoryController::class, 'get'])->name('category');
Route::get('/category/add' , [CategoryController::class, 'add'])->name('category.add');
Route::post('/category/create' , [CategoryController::class, 'create'])->name('category.create');
Route::get('/category/edit/{id}' , [CategoryController::class, 'find'])->name('category.edit');
Route::put('/category/update/{id}' , [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/show/{id}' , [CategoryController::class, 'show'])->name('category.show');
Route::delete('/category/delete/{id}' , [CategoryController::class, 'delete'])->name('category.delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
