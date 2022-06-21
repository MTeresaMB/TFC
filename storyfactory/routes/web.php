<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\manuscriptController;
use App\Http\Controllers\figureController;
use App\Http\Controllers\placeController;
use App\Http\Controllers\articleController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
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
    return view('welcomeStoryFactory');
});

//
/**
 * login and register
 */
Route::get('/signin', function () {
    return view('login/login');
})->name('signin');

Route::get('/signup', function () {
    return view('login/register');
})->name('signup');

/** administrador */
Route::get('/admin', [UserController::class,"admin"])->middleware(['auth'])->name('admin');
Route::get("borrarUser",[UserController::class,"borrarUser"])->name("borrarUser");
Route::get("out",function() {
    Auth::logout();
    session()->flush();
    return redirect()->route("login");
})->middleware(["auth"])->name("out");


/**
 * Route for language translation
 */

 Route::get('locale/{locale}', function($locale){
    session()->put('locale', $locale);
    return Redirect::back();
 })->name('locale');

/**
 * Route to Dashboard
*/
Route::get('/main', [manuscriptController::class,"main"])->middleware(['auth'])->name('main');


/**
 * Routes for manuscripts, creation, editing and deletion
 */
Route::get("create",[manuscriptController::class,"formularioCrear"])->name("create");
Route::post("create",[manuscriptController::class,"crear"])->name("assign");
Route::get("userStories",[manuscriptController::class,"allManuscript"])->name("userStories");
Route::get("editarHistorias",[manuscriptController::class,"editarView"])->name("editarHistorias");
Route::post("edit",[manuscriptController::class,"editar"])->name("edit");
Route::get("borrarHistorias",[manuscriptController::class,"borrarHistorias"])->name("borrarHistorias");



/**
 * Routes for characters, creation, editing and deletion
 */
Route::get("create_figure",[figureController::class,"formularioCrear"])->name("create_figure");
Route::post("create_figure",[figureController::class,"crear"])->name("crear_figure");
Route::get("userFigures",[UserController::class,"seeFigures"])->name("userFigures");
Route::get("borrarFigure",[figureController::class,"borrar"])->name("borrarFigure");
Route::get("editarFigure",[figureController::class,"editar"])->name("editarFigure");
Route::post("editarFigure",[figureController::class,"assign_editar"])->name("assign_editar");

/**
 * Routes for places, creation, editing and deletion
 */
Route::get("create_place",[placeController::class,"create"])->name("create_place");
Route::post("create_place",[placeController::class,"assign"])->name("assign");
Route::get("userPlaces",[UserController::class,"seePlaces"])->name("userPlaces");
Route::get("borrarPlace",[placeController::class,"borrar"])->name("borrarPlace");
Route::get("editarPlace",[placeController::class,"editar"])->name("editarPlace");
Route::post("editarPlace",[placeController::class,"assign_editar"])->name("assign_editar_place");


/**
 * Routes for articles, creation, editing and deletion
 */
Route::get("userArticles",[UserController::class,"seeArticles"])->name("userArticles");
Route::get("create_article",[articleController::class,"create"])->name("create_article");
Route::post("create_article",[articleController::class,"assign"])->name("assign");
Route::get("borrarArticle",[articleController::class,"borrar"])->name("borrarArticle");
Route::get("editarArticle",[articleController::class,"editar"])->name("editarArticle");
Route::post("editarArticle",[articleController::class,"assign_editar"])->name("assign_editar_article");

/**
 * Routes for exportation of manuscript
 */
Route::get("exportView",[manuscriptController::class,"exportView"])->name("exportView");
Route::get("exportData",[manuscriptController::class,"exportData"])->name("exportData");

/**
 * Routes to change user data
 */
Route::get("changeUserData",[UserController::class,"changeView"])->name("changeUserData");
Route::post("changeUserData",[UserController::class,"assign"])->name("assign_data_user");


require __DIR__.'/auth.php';
