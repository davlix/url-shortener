<?php

use App\Http\Controllers\UrlController;

// ...

Route::post('/shorten', [UrlController::class, 'shortenUrl'])->name('shorten.url');
Route::get('/{shortUrl}', [UrlController::class, 'expandUrl'])->name('expand.url');



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
    return view('shorten');
});

