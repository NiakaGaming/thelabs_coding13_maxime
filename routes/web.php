<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ServiceController;
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

// User
Route::get('/home', [HomeController::class, 'indexHome'])->name('home');
Route::get('/services', [HomeController::class, 'indexServices'])->name('services');
Route::get('/blog', [HomeController::class, 'indexBlog'])->name('blog');
Route::get('/contact', [HomeController::class, 'indexContact'])->name('contact');

// Admin
Route::get('/admin', [HomeController::class, 'indexAdmin'])->name('admin');
Route::resource('/admin/nav', NavController::class);
Route::put('/admin/logo/{logo}', [LogoController::class, "update"])->name("admin.logo.edit");
Route::resource('/admin/carousel', CarouselController::class);
Route::resource('/admin/service', ServiceController::class);

Auth::routes();
