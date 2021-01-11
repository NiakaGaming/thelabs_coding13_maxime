<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\VideoController;
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
// ----------------------------------------------------------------------------------------------------
Route::get('/home', [HomeController::class, 'indexHome'])->name('home');
Route::get('/services', [HomeController::class, 'indexServices'])->name('services');
Route::get('/blog', [HomeController::class, 'indexBlog'])->name('blog');
Route::get('/contact', [HomeController::class, 'indexContact'])->name('contact');
// ----------------------------------------------------------------------------------------------------

// ADMIN
// ----------------------------------------------------------------------------------------------------
Route::get('/admin', [HomeController::class, 'indexAdmin'])->name('admin');
Route::resource('/admin/carousel', CarouselController::class);
Route::resource('/admin/service', ServiceController::class);
Route::resource('/admin/about', AboutController::class);
Route::resource('/admin/video', VideoController::class);
Route::resource('/admin/testimonial', TestimonialController::class);
Route::resource('/admin/team', TeamController::class);
Route::put('/admin/choice/{choice}', [ChoiceController::class, "update"])->name("admin.choice.edit");
// Partials
Route::resource('/admin/nav', NavController::class);
Route::resource('/admin/title', TitleController::class);
Route::put('/admin/logo/{logo}', [LogoController::class, "update"])->name("admin.logo.edit");
Route::resource('/admin/contact-form', ContactFormController::class);
// ----------------------------------------------------------------------------------------------------

Auth::routes();
