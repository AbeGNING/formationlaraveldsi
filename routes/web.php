<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/',         [MainController::class, 'afficheAcceuil'] )->name('accueil');

Route::get('procedure/{param}', [MainController::class, 'afficheProcedure'])->name('procedure')  ;
Route::get('ajouter-produit',   [MainController::class, 'ajoutProduit'])->name('a.produit')  ;

Route::get('ajout2',            [MainController::class, 'ajoutProduitEncore'])->name('a.p')  ;

Route::get("list-produits", [MainController::class, "getList"])->name("list");

Route::get('modification/{id}', [MainController::class, "modifierProduit"]);

Route::get('supprimer/{id}', [MainController::class, "supprimer"]);