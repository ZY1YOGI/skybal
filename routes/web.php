<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [Controllers\MainController::class, 'index'])->name('home');

Route::get('/categories', [Controllers\MainController::class, 'categories'])->name('categories');
Route::get('/categories/{slug}', [Controllers\MainController::class, 'category'])->name('category.show');


Route::get('/product/{slug}', [Controllers\MainController::class, 'product'])->name('product');



