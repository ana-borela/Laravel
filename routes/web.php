<?php

use App\Http\Controllers\site\AboutControllers;
use App\Http\Controllers\site\BlogControllers;
use App\Http\Controllers\site\CategoryControllers;
use App\Http\Controllers\site\ContactControllers;
use App\Http\Controllers\site\HomeControllers;
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

Route::namespace('site')->group(function() {
    Route::get('/', [HomeControllers::class, 'index'])->name('site.home');


    // Categoria de produtos
    Route::get('/produtos', [CategoryControllers::class, 'index'])->name('site.products');
    Route::get('/produtos/{slug}', [CategoryControllers::class, 'show'])->name('site.products.category');

    // Blog
    Route::get('blog', [BlogControllers::class, 'index'])->name('site.blog');

    // Sobre
    Route::get('sobre', [AboutControllers::class, 'index'])->name('site.about');

    //Contato
    Route::get('contato', [ContactControllers::class, 'index'])->name('site.contact');
    Route::post('contato', [ContactControllers::class, 'form'])->name('site.contact.form');
});
