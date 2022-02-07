<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;
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
// Route::pattern('id', '[0-9]+');
// Route::get('/home',[IndexController::class,'Store']);
// Route::get('/',[IndexController::class,'Store']);
// Route::get('/ProductDetails/{id}',[IndexController::class,'prod_details']);
// Route::get('/ProductList/Phones',[IndexController::class,'Phones']);
// Route::get('/ProductList/Watches',[IndexController::class,'Watches']);
// Route::get('/ProductList/Sport Wear',[IndexController::class,'SportWear']);


Route::get('/categories',[CategoryController::class,'list'])->name('categories.list');
Route::get('/createCategory',[CategoryController::class,'create'])->name('categories.create');
Route::post('/storeCategory',[CategoryController::class,'store'])->name('categories.store');
Route::delete('/deleteCategory/{id}',[CategoryController::class,'delete'])->name('categories.delete');
Route::get('/updateformCategory/{id}',[CategoryController::class,'updateform'])->name('categories.updateform');
Route::post('/updateCategory/{id}',[CategoryController::class,'update'])->name('categories.update');
Route::get('/categories/{id}/products',[ProductController::class,'list'])->name('categories.products.list');
Route::get('/createProduct/{id}',[ProductController::class,'create'])->name('products.create');
Route::post('/storeCategory/{id}',[ProductController::class,'store'])->name('products.store');
Route::delete('/deleteProduct/{id}',[ProductController::class,'delete'])->name('products.delete');
Route::get('/updateformProduct/{id}',[ProductController::class,'updateform'])->name('products.updateform');
Route::post('/updateProduct/{id}',[ProductController::class,'update'])->name('products.update');

// $categories=['Phones','Watches','Sport Wear','Other'];