<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TagController;
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

Route::get('/ajouterVoyage',[VoyageController::class,'create'])->name('formAjoutVoyage');
Route::post('/ajouterVoyage',[VoyageController::class,'store'])->name('addVoyage');
Route::get('/listeVoyage',[VoyageController::class,'index'])->name('listeVoyage');

Route::get('/editVoyage/{voyage:id}',[VoyageController::class,'edit'])->name('editVoyage');
Route::post('/updateVoyage/{voyage:id}',[VoyageController::class,'update'])->name('updateVoyage');
Route::get('/deleteVoyage/{voyage:id}',[VoyageController::class,'destroy'])->name('deleteVoyage');

Route::get('/addTag',[TagController::class,'add'])->name('addTag');
Route::get('/listeTags',[TagController::class,'index'])->name('listeTags');
Route::post('/ajouterTag',[TagController::class,'store'])->name('insertionTag');
Route::get('/ediTag/{tag:id}',[TagController::class,'edit'])->name('editag');
Route::post('/updateTag/{tag:id}',[TagController::class,'update'])->name('updateTag');
Route::get('/deleTag/{tag:id}',[TagController::class,'destroy'])->name('deletag');

Route::get('/roles',[RoleController::class,'index'])->name('displayRoles');
Route::get('/createRole',[RoleController::class,'create'])->name('createRole');
Route::post('/addRole',[RoleController::class,'insert'])->name('insertRole');

Route::get('/', function () {
    return view ('welcome');
})->name('welcome');
