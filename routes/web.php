<?php

use App\Models\hygiene;
use App\Models\recommandation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\hygieneController;


Route::get('/', [mainController::class, 'main']);
Route::get('/medicaments', [mainController::class, 'index']);
Route::get('/medicaments/all', [mainController::class, 'showAll'])->name('medicaments.showAll');
Route::get('/medicaments/{id}', [mainController::class, 'showmedicament'])->name('produits.showmedicament');
Route::get('/recommandations', [mainController::class, 'indexrecomm']);
Route::get('/recommandations/all', [mainController::class, 'seeMorerecomm'])->name('recommandations.seeMorerecomm');
Route::get('/recommandations/{id}', [mainController::class, 'showrecomm'])->name('recommandations.showrecomm');
Route::get('/hygiene', [hygieneController::class, 'index']);
Route::get('/produits/{id}', [hygieneController::class, 'singleProduct']);
// Route::get('/react', function () {
//     return view('react');
// });
