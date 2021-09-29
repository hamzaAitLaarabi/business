<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\PostsController;
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


Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view('/register',"register");
Route::view('/login',"login");
Route::view('test',"test");
Route::view('teste',"teste");
Route::view('/',"home");
Route::view('donate',"donate");
Route::view('/livreur',"livreur");// middleware
Route::view('/settings',"settings");// middleware
Route::view('/settings/home',"settings/home");// middleware


/* GET UsersController */

Route::get("/user",[UsersController::class,'user']);

/* GET PostsControlle */

Route::get("/profil/{id}",[PostsController::class,'profil']);
Route::get("/profil/{id}/annonces",[PostsController::class,'annonces']);
Route::get("/profil/{id}/panier",[PostsController::class,'panier']);
Route::get("/profil/{id}/don",[PostsController::class,'don']);
Route::get("/posts",[PostsController::class,'posts']);
Route::get("/search",[PostsController::class,'search']);
Route::get("/delet_Anonn/{id}",[PostsController::class,'delet_Anonn']);
Route::get("/add_to_cart/{id}",[PostsController::class,'add_to_cart']);
Route::get("/search",[PostsController::class,'search']);

/* POST UsersController */

Route::post("/register",[UsersController::class,"register"]);
Route::post("/login",[UsersController::class,"login"]);

/* POST PostsController */

Route::post("/AddPost",[PostsController::class,'AddPost']);
Route::post("/add_donate",[PostsController::class,'add_donate']);
Route::post("/add_commande",[PostsController::class,'add_commande']);


/* Settings Controller */
Route::post("/add_stock",[SettingsController::class,'add_stock']);









