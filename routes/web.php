<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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



/*
El idioma por defecto de la aplicación es el ingles y por ello las rutas del idioma ingles omiten de la ruta "/en",
para que aparezcan en la ruta solo hay que eliminar el middelware "localizationRedirect".
*/
Route::group(
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect','localize' ]
], function()
{
    Route::get('/', function () {
        return view('home');
    })->name('home');

	// Route::resource('book', BookController::class);
    Route::get(LaravelLocalization::transRoute('routes.book.index'), [BookController::class, 'index'])->name('book.index');
    Route::post(LaravelLocalization::transRoute('routes.book.store'), [BookController::class, 'store'])->name('book.store');
    Route::get(LaravelLocalization::transRoute('routes.book.create'), [BookController::class, 'create'])->name('book.create');
    Route::patch(LaravelLocalization::transRoute('routes.book.update'), [BookController::class, 'update'])->name('book.update');
    Route::delete(LaravelLocalization::transRoute('routes.book.destroy'), [BookController::class, 'destroy'])->name('book.destroy');
    Route::get(LaravelLocalization::transRoute('routes.book.edit'), [BookController::class, 'edit'])->name('book.edit');
   

    Route::get(LaravelLocalization::transRoute('routes.contact'), [ContactController::class, 'create'])->name('contact');
    Route::post(LaravelLocalization::transRoute('routes.contact'), [ContactController::class, 'send'])->name('send');
});

