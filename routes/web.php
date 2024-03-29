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
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ContactMailController;
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
Route::redirect('/', '/home', 301);
Route::get('/home', [HomeController::class, 'indexHome'])->name('home');
Route::get('/services', [HomeController::class, 'indexServices'])->name('services');
Route::get('/blog', [HomeController::class, 'indexBlog'])->name('blog');
Route::get('/contact', [HomeController::class, 'indexContact'])->name('contact');
Route::get('/comment/{comment}', [CommentController::class, 'show'])->name('comment');
Route::post('/comment/{article}', [CommentController::class, 'store'])->name('article.comment');
// ----------------------------------------------------------------------------------------------------

// ADMIN
// ----------------------------------------------------------------------------------------------------
Route::get('/admin', [HomeController::class, 'indexAdmin'])->middleware("admin_web")->name('admin');
Route::resource('/admin/carousel', CarouselController::class);
Route::resource('/admin/service', ServiceController::class);
Route::resource('/admin/about', AboutController::class);
Route::post('/admin/about/hid-show-{id}', [AboutController::class, "hide"])->middleware("admin_web")->name("admin.about.hide-sho");
Route::resource('/admin/video', VideoController::class);
Route::resource('/admin/testimonial', TestimonialController::class);
Route::resource('/admin/team', TeamController::class);
Route::put('/admin/choice/{choice}', [ChoiceController::class, "update"])->middleware("web")->name("admin.choice.edit");
Route::resource('/admin/article', ArticleController::class);
Route::resource('/admin/tag', TagController::class);
Route::resource('/admin/categorie', CategorieController::class);
Route::resource('/admin/profil', ProfilController::class);
Route::resource('/admin/map', MapController::class);
Route::post('admin/article/approved-{article}', [ArticleController::class, "approved"])->middleware("admin_web")->name("admin.article.approved");
Route::get('/admin/mail', [ContactMailController::class, "index"])->middleware("admin_web")->name("admin.mailbox.index");
Route::resource('/admin/newsletter', NewsletterController::class);
// Partials
Route::resource('/admin/nav', NavController::class);
Route::resource('/admin/title', TitleController::class);
Route::put('/admin/logo/{logo}', [LogoController::class, "update"])->middleware("admin_web")->name("admin.logo.edit");
Route::resource('/admin/contact-form', ContactFormController::class);
// ----------------------------------------------------------------------------------------------------

Auth::routes();
