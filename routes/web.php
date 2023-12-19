<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUD\Cars\CarController;
use App\Http\Controllers\CRUD\Books\BookController;
use App\Http\Controllers\CRUD\Products\ProductController;
use App\Http\Controllers\CRUD\Etudiants\EtudiantController;
use App\Http\Controllers\CRUD\Products\CategorieController;

// Route::get('/', function () {
//     return view('welcome');
// });

//? CRUD_STUDENT
Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiant.index');

Route::get('/etudiants/create', [EtudiantController::class, 'create'])->name('etudiant.create');

Route::post('/etudiants', [EtudiantController::class, 'store'])->name('etudiant.store');

Route::get('/etudiants/{etudiant}/edit', [EtudiantController::class, 'edit'])->name('etudiant.edit');

Route::put('/etudiants/{etudiant}/update', [EtudiantController::class, 'update'])->name('etudiant.update');

Route::delete('/etudiants/{etudiant}/destroy', [EtudiantController::class, 'destroy'])->name('etudiant.destroy');


//? CRUD CAR
Route::get('/cars', [CarController::class, 'index'])->name('car.index');

Route::get('/cars/create', [CarController::class, 'create'])->name('car.create');

Route::post('/cars', [CarController::class, 'store'])->name('car.store');

Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('car.edit');

Route::put('/cars/{car}/update', [carController::class, 'update'])->name('car.update');

Route::delete('/cars/{car}/destroy', [carController::class, 'destroy'])->name('car.destroy');

Route::get('/cars/{car}/details', [carController::class, 'details'])->name('car.detail');


//? CRUD BOOK

Route::get('/books', [BookController::class, 'lister']);
Route::get('/books/{numero}', [BookController::class, 'detail']);
Route::get('/books/ajouter', function () {
  return view('books.ajouterBook');
});
Route::post('/books/ajouter', [BookController::class, 'ajouter']);
Route::get('/books/modifier/{numero}', [BookController::class, 'modifier']);
Route::post('/books/modifier/{numero}', [BookController::class, 'mettreAJour']);
Route::get('/books/supprimer/{numero}', [BookController::class, 'supprimer']);
Route::post('/books/rechercher-par-titre', [BookController::class, 'rechercherBooksParTitre']);
Route::post('/books/rechercher-par-auteur', [BookController::class, 'rechercherBooksParAuthor']);


//? CRUD PRODUCT
Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');
Route::get('/categories/create',[CategorieController::class,'create'])->name('categories.create');
Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}/update', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');