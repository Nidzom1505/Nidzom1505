<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\projectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [dashboardController::class, 'index'])->name('dashboard');
Route::get('/projects', [projectController::class, 'index'])->name('projects');
