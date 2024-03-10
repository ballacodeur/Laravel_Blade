<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PointageController;
use App\Http\Controllers\PaiementController;
use App\Http\Middleware\Authenticate; // Exemple de middleware
use App\Models\User;

use Illuminate\Support\Facades\Route;

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
// Routes pour les utilisateurs



// Route pour la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// returns the home page with all users
Route::get('/', UserController::class . '@index')->name('users.index')->middleware('web');
// returns the form for adding a user
Route::get('/users/create', UserController::class . '@create')->name('users.create');
// adds a user to the database
Route::post('/users.store', UserController::class . '@store')->name('users.store');
// returns a page that shows a full user
Route::get('/users/{user}', UserController::class . '@show')->name('users.show');
// updates a user
Route::put('/users/{user}', UserController::class . '@update')->name('users.update');
// deletes a user
Route::delete('/users/{user}', UserController::class . '@destroy')->name('users.destroy');
