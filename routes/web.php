<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUD\Cars\CarController;
use App\Http\Controllers\CRUD\Etudiants\EtudiantController;

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

