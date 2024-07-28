<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('', 'index')->name('home.index');
    });

Route::controller(HomeController::class)
    ->prefix('recipes')
    ->name('recipes.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('{id}', 'show')->name('show')->where(['id' => '[0-9]+']);
    });

