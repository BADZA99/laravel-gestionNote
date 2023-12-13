<?php

use App\Models\Apprenant;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\apprenantController;
use App\Http\Controllers\matiereController;

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

// page acceuil
Route::get('/', function () {
    return view('welcome');
});

// apprenants routes
Route::get('/apprenants', [apprenantController::class, 'index'])->name('liste-apprenants');
Route::get('/apprenants/new', [apprenantController::class, 'create'])->name('add-new-student');
Route::post('/apprenants/store', [apprenantController::class, 'store'])->name('store-apprenant');
// modifier apprenant
Route::get('/apprenants/edit/{id}', [apprenantController::class, 'edit'])->name('edit-apprenant');
// maj apprenant
Route::post('/apprenants/update/{id}', [apprenantController::class, 'update'])->name('update-apprenant');
// supprimer apprenant
Route::get('/apprenants/delete/{id}', [apprenantController::class, 'destroy'])->name('delete-apprenant');




// matieres routes
Route::get('/matieres', [matiereController::class, 'index'])->name('liste-matieres');
Route::get('/matieres/new', [matiereController::class, 'create'])->name('add-new-matiere');
Route::post('/matieres/store', [matiereController::class, 'store'])->name('store-matiere');



