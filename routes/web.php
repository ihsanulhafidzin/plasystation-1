<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaystationController;
use App\Http\Controllers\AdminController;

// Rute untuk Playstation
Route::get('/playstations', [PlaystationController::class, 'index'])->name('playstations.index');
Route::get('/playstations/create', [PlaystationController::class, 'create'])->name('playstations.create');
Route::post('/playstations/store', [PlaystationController::class, 'store'])->name('playstations.store');
Route::get('/playstations/{id}', [PlaystationController::class, 'show'])->name('playstations.show');
Route::get('/playstations/{id}/edit', [PlaystationController::class, 'edit'])->name('playstations.edit');
Route::put('/playstations/{id}', [PlaystationController::class, 'update'])->name('playstations.update');
Route::delete('/playstations/{id}', [PlaystationController::class, 'destroy'])->name('playstations.destroy');

// Rute untuk Admin
Route::get('/admins', [AdminController::class, 'index'])->name('admins.index');
Route::get('/admins/create', [AdminController::class, 'create'])->name('admins.create');
Route::post('/admins/store', [AdminController::class, 'store'])->name('admins.store');
Route::get('/admins/{id}', [AdminController::class, 'show'])->name('admins.show');
Route::get('/admins/{id}/edit', [AdminController::class, 'edit'])->name('admins.edit');
Route::put('/admins/{id}', [AdminController::class, 'update'])->name('admins.update');
Route::delete('/admins/{id}', [AdminController::class, 'destroy'])->name('admins.destroy');
