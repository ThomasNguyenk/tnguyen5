<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/info', function () {
        return view('pages/info-etudiant');
    })->name('info');
});
Route::get('/creationEtudiant', function() {
    return view('pages/creation-etudiant');
})->name('etudiant');

Route::get('/info', function() {
    return view('pages/info-etudiant');
})->name('info');

Route::resource('etudiant', 'App\Http\Controllers\EtudiantController');

