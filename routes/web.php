<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\admin\ExperiencesController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\Admin\ProfileAdminController;
use App\Http\Controllers\admin\ProjectAdminController;
use App\Http\Controllers\admin\SkillsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectDetailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/projects/{project}', [ProjectDetailController::class, 'index'])->name('project.detail');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/profile', [ProfileAdminController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{id}', [ProfileAdminController::class, 'update'])->name('profile.update');

    Route::get('/projects', [ProjectAdminController::class, 'index'])->name('project.edit');
    Route::post('/projects', [ProjectAdminController::class, 'store'])->name('project.store');
    Route::put('/projects/{project}', [ProjectAdminController::class, 'update'])->name('project.update');
    Route::delete('/projects/{project}', [ProjectAdminController::class, 'destroy'])->name('project.destroy');

    Route::get('/skills', [SkillsController::class, 'index'])->name('skill.edit');
    Route::post('/skills', [SkillsController::class, 'store'])->name('skill.store');
    Route::put('/skills/{skill}', [SkillsController::class, 'update'])->name('skill.update');
    Route::delete('/skills/{skill}', [SkillsController::class, 'destroy'])->name('skill.destroy');
    
    Route::get('/experiences', [ExperiencesController::class, 'index'])->name('experience.edit');
    Route::post('/experiences', [ExperiencesController::class, 'store'])->name('experience.store');
    Route::put('/experiences/{experience}', [ExperiencesController::class, 'update'])->name('experience.update');
    Route::delete('/experiences/{experience}', [ExperiencesController::class, 'destroy'])->name('experience.destroy');
});
