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

// Route::get('/', function () {
//     return view('Apprenants.liste');
// });


Route::get('/apprenants', [apprenantController::class, 'index'])->name('liste-apprenants');
Route::get('/apprenants/new', [apprenantController::class, 'create'])->name('add-new-student');
Route::post('/apprenants/store', [apprenantController::class, 'store'])->name('store-apprenant');
Route::get('/matieres', [matiereController::class, 'index'])->name('liste-matieres');



// faire une route pour recuperer les etidiants
// Route::get('/apprenants',[aprrenantController::class,'index']);






// Route::get('/apprenants/new', function () {
//     return view('apprenants.create');
// });
