<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\VoyageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/registerClient',[AuthController::class,'indexCl'])->name('registerCl');
Route::get('/registerSociete',[AuthController::class,'indexSoc'])->name('registerSoc');
Route::post('/inscription',[AuthController::class,'store'])->name('inscription');
Route::get('/connexion',[AuthController::class,'conn'])->name('connexion');
Route::post('/login',[AuthController::class,'login'])->name('login');

Route::get('/ajouterVoyage',[VoyageController::class,'create']);
Route::post('/ajouterVoyage',[VoyageController::class,'store']);
Route::get('/listeVoyage',[VoyageController::class,'index']);


Route::get('/dashboard',[ViewController::class,'index']);


Route::get('/', function () {
    return view ('welcome');
});
