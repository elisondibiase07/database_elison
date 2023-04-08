<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;

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

Route::get('/',[PublicController::class , 'homepage'])->name('homepage');

Route::get('/product/create',[ProductController::class , 'create'])->name('product.create');
Route::post('/product/store',[ProductController::class , 'store'])->name('product.store');
Route::get('/product/brand/{brand}',[ProductController::class , 'getProductsByBrand'])->name('product.brand');

// CRUD 

Route::get('/article/create',[ArticleController::class , 'articleCreate'])->name('article.create');
Route::get('/article',[ArticleController::class , 'article'])->name('article.home');
Route::get('/article/update/{article}',[ArticleController::class , 'update'])->name('article.update');
Route::put('/article/edit/{article}',[ArticleController::class , 'edit'])->name('article.edit');
Route::delete('/article/delete/{article}',[ArticleController::class , 'delete'])->name('article.delete');


Route::get('/article/detail/{id}',[ArticleController::class , 'detail'])->name('article.detail');
Route::post('/article/store',[ArticleController::class , 'articleStore'])->name('article.store');

Route::get('/user/article',[ArticleController::class, 'articleUser'])->name('article.user');