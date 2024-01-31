<?php

use App\Http\Controllers\Blogs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [PublicController::class, 'index'])-> name('home');

//Rotte users
Route::get('/all-user', [PublicController::class, 'allUser'])-> name('all-users');
Route::delete('/user/delete/{user}', [PublicController::class, 'destroy'])->name('user-delete');


//Rotte categorie
Route::get('/category/create', [CategoryController::class, 'create'])->name('category-create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category-store');
Route::get('/category/index', [CategoryController::class, 'index'])->name('category-index');
Route::get('/category/show/{category}', [CategoryController::class, 'show'])->name('category-show');
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category-edit');
Route::put('/category/update/{category}', [CategoryController::class, 'update'])->name('category-update');
Route::delete('/category/delete/{category}', [CategoryController::class, 'destroy'])->name('category-delete');


//Rotte blog
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog-create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog-store');
Route::get('/blog/index', [BlogController::class, 'index'])->name('blog-index');
Route::get('/blog/show/{blog}', [BlogController::class, 'show'])->name('blog-show');
Route::get('/blog/edit/{blog}', [BlogController::class, 'edit'])->name('blog-edit');
Route::put('/blog/update/{blog}', [BlogController::class, 'update'])->name('blog-update');
Route::delete('/blog/delete/{blog}', [BlogController::class, 'destroy'])->name('blog-delete');




