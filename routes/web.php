<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\Admin\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('booking', function(){
//     return view('pages.booking');
// });
Route::get('blog', function(){
    return view('pages.blog');
});
Route::get('about-us', function(){
    return view('pages.about');
});
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome.index');
Route::get('booking', [App\Http\Controllers\BookingController::class, 'index']);
Route::get('booking/{car}', [App\Http\Controllers\BookingController::class, 'show'])->name('booking.show');
Route::get('contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [App\Http\Controllers\ContactController::class, 'sendMessage'])->name('contact.send');
Route::post('search', [App\Http\Controllers\SearchController::class, 'search'])->name('search.store');
//sociale network connexion
Route::controller(OAuthController::class)->group(function() {
    Route::get('auth/redirect/google', 'redirect')->name('oauth.redirect');
    Route::get('auth/callback/google', 'callback')->name('oauth.callback');
});
Route::controller(FacebookAuthController::class)->group(function() {
    Route::get('auth/redirect/facebook', 'redirect')->name('fauth.redirect');
    Route::get('auth/callback/facebook', 'callback')->name('fauth.callback');
});
Route::group(['middleware' => ['auth', 'verified'] ,'prefix' => 'cpanel'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('support', [App\Http\Controllers\SupportController::class, 'index'])->name('support.index');
    Route::post('support', [App\Http\Controllers\SupportController::class, 'store'])->name('support.store');
    Route::resource('cars', CarController::class);
});
Route::group(['middleware' => 'auth', 'prefix' => 'cs-admin'], function (){

    Route::controller(DashboardController::class)->group(function (){
        Route::get('dashboard', 'index')->middleware('role:admin');
    });
});
Auth::routes(['verify' => true]);

