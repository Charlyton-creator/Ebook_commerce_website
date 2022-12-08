<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\EBookController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\PayementController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GeoTagController;
use App\Http\Controllers\RecetteController;
use App\Http\Controllers\CodePackController;
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
    //$daypromo = PromotionController::getpromotionofday();
    return view('home');
})->name('home');
//---------------------------------------------------------------------------
Route::controller(AuthController::class)->group(function(){
    Route::get('/authentification',  'index')->name('authaction');
    Route::post('register', 'register')->name('register');
    Route::post('login','login')->name('login');
    Route::get('logout','logout')->name('logout');
    //Route::get('/dashboard', 'dashboardindex')->middleware('auth.custom')->name('mydashboard');
    Route::get('/dashboard', 'dashboardindex')->name('mydashboard');
    
});
//---------------------------------------------------------------------------
Route::controller(AbonnementController::class)->group(function($packname){
    Route::get('/abonnements','index')->name('abonnements');
    Route::get('/abonements/all', 'getallabonnements');
    Route::get('/addabonnement/index', 'addview');
    Route::post('abonnement/strore', 'store')->name('addabonnement');
    Route::get('/souscription/pack/{packname}','souscriptionpage')->name('souscriptionpage');
    Route::post('/souscription/{packname}/pay','pay')->name('souscriptionpayement');
    Route::post('/souscription/store','store');
    Route::post('/souscription/update','update');
    Route::post('/souscription/delete','delete');
});
//---------------------------------------------------------------------------
Route::controller(EBookController::class)->group(function($libelle = null){
    //Route::get('/addtocart/{libelle}', 'addtocart')->name('addtocart');
    Route::get('/addcart/{id_ebook}','addtocart');
    Route::get('/ebooks','index')->name('ebooks');
    Route::get('/ebooks/all', 'allebooks');
    Route::get('/ebooks/prefered', 'preferedebooks');
    Route::get('/ebooks/notprefered', 'notpreferedebooks');
    Route::post('/ebook/update', 'update');
    Route::post('/ebook/delete', 'delete');

});
//---------------------------------------------------------------------------
Route::controller(CartController::class)->group(function(){
    Route::group(['middleware' => 'auth.custom'], function(){
    });
    Route::get('/viewcart', 'index')->name('cartlist');
    Route::get('/cart/validate','validatecart')->name('valider');
    Route::post('/payement/create', 'storepayement')->name('payer');
});
//---------------------------------------------------------------------------
Route::controller(RedirectController::class)->group(function(){
    Route::get('/404', 'notfound')->name('404');
    Route::get('/403', 'forbiden')->name('403');
    Route::get('/401', 'unauthorized')->name('401');
    Route::get('/500', 'internalervererror')->name('500');
});
//---------------------------------------------------------------------------
Route::controller(CategorieController::class)->group(function(){
    Route::get('/categorie/recette/all', 'getallrecettesofcategorie');
    Route::get('/addcategorie/index', 'addview');
    Route::post('/categorie/create', 'store')->name('addcategorie');
    Route::post('/categorie/update', 'update');
    Route::post('/categorie/delete', 'delete');
    Route::get('/categories', 'getallcategories');
});
//---------------------------------------------------------------------------
Route::controller(CommandeController::class)->group(function(){
    Route::get('/commandes/all', 'allcommandes');
});
//---------------------------------------------------------------------------
Route::controller(RecetteController::class)->group(function(){
    Route::get('/recettes/all', 'allrecettes');
});
//---------------------------------------------------------------------------
Route::controller(FeaturesController::class)->group(function(){
    Route::get('/feature/all', 'getfeatures');
    Route::get('/addfeature/index', 'addview');
    Route::post('/feature/create', 'store')->name('addfeature');
    Route::post('/feature/update', 'update');
    Route::post('/feature/delete', 'delete');
});
//---------------------------------------------------------------------------
Route::controller(PromotionController::class)->group(function(){
    Route::get('/applycode/{discount_token?}', 'applycodepack');
    Route::get('/promotions/all', 'getallpromotion');
    Route::get('/addpromotion/index', 'addview');
    Route::post('promotion/create', 'store');
    Route::post('promotion/update', 'update');
    Route::post('promotion/delete', 'delete');
});
//---------------------------------------------------------------------------
Route::controller(NewsController::class)->group(function(){
    Route::post('/suscribenews', 'suscribe')->name('newssuscribe');
    Route::get('/news/all', 'allsouscription');
});
//---------------------------------------------------------------------------
Route::controller(PublicationController::class)->group(function(){
    Route::get('/publications','index')->name('publicités');
    Route::post('/publication/create', 'store');
    Route::post('/publication/update', 'update');
    Route::post('/publication/delete', 'delete');
    Route::get('/publications/all', 'allpubs');
});
//---------------------------------------------------------------------------
Route::controller(CodePackController::class)->group(function(){
    Route::get('/code/all','getall')->name('allcodes');
    Route::get('/addcodepack/index', 'addview');
    Route::post('/code/create', 'store')->name('codegenerate');
    Route::post('/code/update', 'update');
    Route::post('/code/delete/{id}', 'delete');
});
//---------------------------------------------------------------------------
Route::controller(GeoTagController::class)->group(function(){
    Route::get('/recettes/geotag','recettesofgeotag');
    Route::post('/geotag/delete', 'delete');
    Route::get('/geotags/all', 'allgeotags');
});
//---------------------------------------------------------------------------
Route::controller(PayementController::class)->group(function(){
    Route::get('/payement/all','allpayements');
});
//--------------------------------------------------------------------------
Route::controller(AdminController::class)->group(function(){
    Route::get('/users/all', 'allusers');
});