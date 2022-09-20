<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;
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
// Route::get('/',function(){
//     return view('frontend.index');
// });
Route::resource('/',FrontendController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([AdminMiddleware::class])->group(function(){
    Route::resource('/dashboard',FrontendController::class);
    Route::resource('/categories',CategoryController::class);
    Route::resource('/products',ProductController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
