<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant']);
Route::get('/ajouter', [EtudiantController::class, 'add_etudiant']);
Route::post('add/traitement', [EtudiantController::class, 'add']);
Route::get('update/{id}', [EtudiantController::class, 'update']);
Route::post('update/traitement', [EtudiantController::class, 'update_etudiant']);
Route::post('delete', [EtudiantController::class, 'delete']);