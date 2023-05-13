<?php

use App\Models\hygiene;
use App\Models\recommandation;
use Illuminate\Foundation\Vite;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\beauteController;
use App\Http\Controllers\hygieneController;
use App\Http\Controllers\medicamentsController;

Route::get('/reactCart', [hygieneController::class, 'reactCart'])->name('reactCart');

Route::get('/', [mainController::class, 'main']);
Route::get('/medicaments', [mainController::class, 'index']);
Route::get('/cart', [hygieneController::class, 'cart'])->name('cart');
Route::get('/add_to_cart/{id}', [hygieneController::class, 'addToCart'])->name('add_to_cart');
Route::delete('/remove_from_cart/{id}', [hygieneController::class, 'remove'])->name('remove_from_cart');
Route::patch('/update_cart/{id}', [hygieneController::class, 'update'])->name('update_cart');
Route::get('/medicaments/all', [mainController::class, 'showAll'])->name('medicaments.showAll');
Route::get('/medicaments/{id}', [mainController::class, 'showmedicament'])->name('produits.showmedicament');
Route::get('/recommandations', [mainController::class, 'indexrecomm']);
Route::get('/recommandations/all', [mainController::class, 'seeMorerecomm'])->name('recommandations.seeMorerecomm');
Route::get('/recommandations/{id}', [mainController::class, 'showrecomm'])->name('recommandations.showrecomm');
Route::get('/hygiene', [hygieneController::class, 'index']);
Route::get('/produits/{id}', [hygieneController::class, 'singleProduct']);
Route::get('/pagemedicaments', [medicamentsController::class, 'index']);
Route::get('/beautes', [beauteController::class, 'index']);

// Route::get('/react', function () {
//     return view('react');
// });
