<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\EBookController;
use App\Http\Controllers\RedirectController;


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
    return view('home');
})->name('home');
Route::controller(AuthController::class)->group(function(){
    Route::get('/authentification',  'index')->name('authaction');
    Route::post('register', 'register')->name('register');
    Route::post('login','login')->name('login');
    Route::get('logout','logout')->name('logout');
    //Route::get('/dashboard', 'dashboardindex')->middleware('auth.custom')->name('mydashboard');
    Route::get('/dashboard', 'dashboardindex')->name('mydashboard');
    
});
Route::controller(AbonnementController::class)->group(function($packname){
    Route::get('/abonnements','index')->name('abonnements');
    Route::get('/souscription/pack/{packname}','souscriptionpage')->name('souscriptionpage');
    Route::post('/souscription/pack/{packname}','souscrire');
});
Route::controller(EBookController::class)->group(function(){
    Route::get('/addtocart', 'addtocart')->name('addtocart');
    Route::get('/ebooks','index')->name('ebooks');
});
Route::group(['middleware' => 'auth.custom'], function(){
    //Route::get('/cart', [CartController::class, 'index'])->name('mycart');
});
Route::get('/cart', [CartController::class, 'index'])->name('mycart');
Route::get('/publications', [PublicationController::class, 'index'])->name('publicités');
Route::controller(RedirectController::class)->group(function(){
    Route::get('/404', 'notfound')->name('404');
    Route::get('/403', 'forbiden')->name('403');
    Route::get('/401', 'unauthorized')->name('401');
    Route::get('/500', 'internaservererror')->name('500');
});
