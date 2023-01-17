<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OAuthController;
use App\Http\Controllers\FacebookAuthController;

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

//start sociale connect
Route::controller(OAuthController::class)->group(function() {
    Route::get('auth/redirect/google', 'redirect')->name('oauth.redirect');
    Route::get('auth/callback/google', 'callback')->name('oauth.callback');
});

Route::controller(FacebookAuthController::class)->group(function() {
    Route::get('auth/redirect/facebook', 'redirect')->name('fauth.redirect');
    Route::get('auth/callback/facebook', 'callback')->name('fauth.callback');
});

//end sociale connect

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
