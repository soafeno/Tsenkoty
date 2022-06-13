<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ProdController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [Home::class,'accueil'])->name('accueil');
Route::get('/accueil', [Home::class,'param'])->name('param');
Route::get('/message', [Home::class,'message'])->name('message');
Route::get('/liste', [ProdController::class,'tsena'])->name('tsena');
Route::get('Produit/Nouveau/{id?}', [ProdController::class, 'nouveau'])->name('nouveau');
Route::post('/ajoutArticle', [ProdController::class, 'ajoutArticle'])->name('ajoutArticle');
Route::get('/Produit/supprimer/{id}', [ProdController::class, 'supprimerArticle'])->name('supprimerArticle');
Route::post('/Produit/Modifier/{id}', [ProdController::class, 'ModifierArticle'])->name('ModifierArticle');
Route::get('/commandes', [CommandeController::class,'commande'])->name('commande');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/client', [DataController::class, 'client'])->name('client');