<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OAuthController;

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

Route::get('about-us', function(){
    return view('pages.about');
});

Route::get('booking', function(){
    return view('pages.booking');
});

Route::get('contact', function(){
    return view('pages.contact');
});

Route::get('blog', function(){
    return view('pages.blog');
});

Route::controller(OAuthController::class)->group(function() {
    Route::get('auth/redirect/google', 'redirect')->name('oauth.redirect');
    Route::get('auth/callback/google', 'callback')->name('oauth.callback');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
