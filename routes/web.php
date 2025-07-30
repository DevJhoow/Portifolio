<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\FacuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', [HomeController::class, 'index'])->name('template');

Route::prefix('Home')->controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index.home');
    Route::get('/curso', 'curso')->name('index.curso');
    Route::get('/seguranca', 'seguranca')->name('index.security');
    Route::get('/postman', 'postman')->name('index.postman');
    Route::get('/phpunit', 'phpunit')->name('index.phpunit');
    Route::get('/scrum-kanban', 'scrumkanban')->name('index.scrum');
    Route::get('/phpunit', 'phpunit')->name('index.phpunit');
    Route::get('/cicd-devops', 'cicddevops')->name('index.cicd');
    Route::get('/IA', 'ia')->name('index.ia');
});

Route::prefix('Project')->controller(ProjectController::class)->group(function () {
    Route::get('/', 'index')->name('index.project');
    Route::post('/', 'store');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');
});

Route::prefix('Faculdade')->controller(FacuController::class)->group(function () {
    Route::get('/', 'index')->name('index.facu');
    Route::post('/', 'store');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');
});

// Route::get('/cicd-devops', [PortfolioController::class, 'cicd'])->name('index.cicd');

