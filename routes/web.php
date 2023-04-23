<?php

use App\Http\Controllers\DeleteAllController;
use App\Http\Controllers\StagiaireController;
use Illuminate\Support\Facades\Route;
use App\Models\Stagiaire;

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


Route::resource('stagiaires', StagiaireController::class);

Route::delete('/delete-all-rows', function () {
    Stagiaire::truncate();
    return redirect()->back()->with('success', 'All rows deleted successfully.');
})->name('delete-all-rows');

Route::get('/search', [StagiaireController::class ,'search'])->name('search');

