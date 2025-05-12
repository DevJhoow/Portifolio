<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\FacuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SobreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('home')->controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index.home');
    Route::post('/', 'store');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');
});

Route::prefix('project')->controller(ProjectController::class)->group(function () {
    Route::get('/', 'index')->name('index.project');
    Route::post('/', 'store');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');
});

Route::prefix('sobre')->controller(SobreController::class)->group(function () {
    Route::get('/', 'index')->name('index.sobre');
    Route::post('/', 'store');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');
});

Route::prefix('facu')->controller(FacuController::class)->group(function () {
    Route::get('/', 'index')->name('index.facu');
    Route::post('/', 'store');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');
});

Route::prefix('config')->controller(ConfigController::class)->group(function () {
    Route::get('/', 'index')->name('index.config');
    Route::post('/', 'store');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');
});
