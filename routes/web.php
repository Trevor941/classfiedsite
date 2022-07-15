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
    return view('front.index');
});
// Route::get('/contact', function () {
//     return view('front.contact');
// });
// Route::get('/indexcl', function () {
//     return view('front.index');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');
Route::get('/contact', [App\Http\Controllers\ContactFormController::class, 'create'])->name('contact.create');
Route::post('/contact', [App\Http\Controllers\ContactFormController::class, 'store'])->name('contact.store');
Route::resource('customers', App\Http\Controllers\CustomersController::class);


    Route::prefix('/listings')->group(function(){

    Route::get('/', [App\Http\Controllers\ListingsController::class, 'index'])->name('listings.index');
    Route::get('/create', [App\Http\Controllers\ListingsController::class, 'create'])->name('listings.create');
    Route::get('/listing/{slug}', [App\Http\Controllers\ListingsController::class, 'show'])->name('listings.show');
    Route::delete('/{slug}', [App\Http\Controllers\ListingsController::class, 'destroy'])->name('listings.destroy');

    });
 