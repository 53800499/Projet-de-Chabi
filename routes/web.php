<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\BoutiqueController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ajouter_infos_materiel_sortant', [locationController::class, 'ajouter_infos_materiel_sortant']);
Route::post('/sauvegarder_infos_materiel_sortant', [locationController::class, 'sauvegarder_infos_materiel_sortant'])->name('sauvegarder_infos_materiel_sortant');
Route::get('/listes_materiels_location', [locationController::class, 'listes_materiels_location']);
Route::get('/modifier_infos_materiel_sortant', [locationController::class, 'modifier_infos_materiel_sortant']);
Route::post('/sauver_modifier_infos_materiel_sortant/{id}', [locationController::class, 'modifier_infos_materiel_sortant']);
Route::post('/supprimer_infos_materiel_sortant/{id}', [locationController::class, 'supprimer_infos_materiel_sortant']);




Route::get('/location', [LocationController::class,'location']);
Route::get('/ajouter-location', [LocationController::class,'add']);
Route::post('/sauver-location', [LocationController::class,'save'])->name('save');
Route::get('/edits-location/{id}', [LocationController::class,'edits']);
Route::post('/modifier-location/{id}', [LocationController::class,'update']);
Route::get('/delete-location/{id}', [LocationController::class,'delete']);
Route::get('/desactiver-location/{id}', [LocationController::class,'desactiver']);
Route::get('/activer-location/{id}', [LocationController::class,'activer']);


Route::get('/boutique', [BoutiqueController::class,'boutique']);
Route::get('/ajouter-boutique', [BoutiqueController::class,'add']);
Route::post('/sauver-boutique', [BoutiqueController::class,'save'])->name('save');
Route::get('/edits-boutique/{id}', [BoutiqueController::class,'edits']);
Route::post('/modifier-boutique/{id}', [BoutiqueController::class,'update']);
Route::get('/delete-boutique/{id}', [BoutiqueController::class,'delete']);
Route::get('/desactiver-boutique/{id}', [BoutiqueController::class,'desactiver']);
Route::get('/activer-boutique/{id}', [BoutiqueController::class,'activer']);