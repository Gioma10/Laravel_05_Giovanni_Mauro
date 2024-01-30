<?php

use App\Http\Controllers\Blogs;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

//Rotte blog
Route::get('/new-blog', [BlogsController::class, 'newBlog'])-> name('new-blog');
Route::post('/new-blog/blogs', [BlogsController::class, 'save'])-> name('blogs');

//Rotte categorie
Route::get('/category/create', [CategoryController::class, 'create'])->name('category-create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category-store');
Route::get('/category/index', [CategoryController::class, 'index'])->name('category-index');
Route::get('/category/show/{category}', [CategoryController::class, 'show'])->name('category-show');
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category-edit');
Route::put('/category/update/{category}', [CategoryController::class, 'update'])->name('category-update');
Route::delete('/category/delete/{category}', [CategoryController::class, 'destroy'])->name('category-delete');




