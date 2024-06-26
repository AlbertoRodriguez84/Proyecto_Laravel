<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MainController;

Route::middleware(['auth'])->group(function () {
    Route::resource("alumnos", \App\Http\Controllers\AlumnoController::class);
});
Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/dwes', function () {
    return view('proyectos.dwes');
})->name('dwes');

/*Route::get('/', function () {
    return view('welcome');
})*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
