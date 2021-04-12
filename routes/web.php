<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/front', [App\Http\Controllers\FrontControoller::class, 'index'])->name('front');

Route::get('detail/{id}', [App\Http\Controllers\FrontControoller::class, 'detail'])->name('detail');

// Route::get('api/{id}', [App\Http\Controllers\ApiController::class, 'api'])->name('api');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
////////////////// product category routes
 Route::get('product_cat_index', [App\Http\Controllers\ProductCategoryController::class, 'index'])->name('product_cat_index');
Route::post('product_cat_index', [App\Http\Controllers\ProductCategoryController::class, 'product_cat_index_save'])->name('product_cat_index');
 Route::get('update_product_cat/{id}', [App\Http\Controllers\ProductCategoryController::class, 'update_product_cat'])->name('update_product_cat');
  Route::post('update_product_cat/{id}', [App\Http\Controllers\ProductCategoryController::class, 'update_product_cat_save'])->name('update_product_cat');
////////////////
////////products routes
 Route::get('product_index', [App\Http\Controllers\ProductsContoller::class, 'index'])->name('product_index');
  Route::post('product_index', [App\Http\Controllers\ProductsContoller::class, 'index_save'])->name('product_index');
 Route::get('publish_product/{id}', [App\Http\Controllers\ProductsContoller::class, 'publish_product'])->name('publish_product');
Route::get('update_product/{id}', [App\Http\Controllers\ProductsContoller::class, 'update_product'])->name('update_product');
Route::post('update_product/{id}', [App\Http\Controllers\ProductsContoller::class, 'update_product_save'])->name('update_product');
  //////////////////articles routes
Route::get('articles_index', [App\Http\Controllers\ArticlesController::class, 'index'])->name('articles_index');
  Route::post('articles_index', [App\Http\Controllers\ArticlesController::class, 'index_save'])->name('articles_index');
 Route::get('publish_article/{id}', [App\Http\Controllers\ArticlesController::class, 'publish_article'])->name('publish_article');
Route::get('update_article/{id}', [App\Http\Controllers\ArticlesController::class, 'update_article'])->name('update_article');
Route::post('update_article/{id}', [App\Http\Controllers\ArticlesController::class, 'update_article_save'])->name('update_article');