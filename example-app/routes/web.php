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
    return view('welcome');
});
Route::get('/Service', function () {
    return view('pages.HeaderLinkPages.Service');
});
Route::get('/About', function () {
    return view('pages.HeaderLinkPages.About');
});
Route::get('/Contact', function () {
    return view('pages.HeaderLinkPages.Contact');
});
Route::get('/FAQ', function () {
    return view('pages.HeaderLinkPages.FAQ');
});
Route::get('/Learn_More', function () {
    return view('pages.HeaderLinkPages.Learn_More');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

