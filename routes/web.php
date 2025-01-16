<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function() {
    return view('HomePage');
})->name('home');


Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


// Routes pour les tableaux de bord
Route::get('/formateur', function () {
    return view('formateur'); // Vue pour le formateur
})->name('formateur'); // Renommez pour correspondre à la redirection

Route::get('/stagiaire', function () {
    return view('stagiaire'); // Vue pour le stagiaire
})->name('stagiaire'); // Renommez pour correspondre à la redirection

Route::get('/admin', function () {
    return view('admin'); // Vue pour l'admin
})->name('admin'); // Renommez pour correspondre à la redirection

// Afficher le formulaire de connexion
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Traiter la connexion
Route::post('/login', [LoginController::class, 'login']);

// Déconnexion
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
