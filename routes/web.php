<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\RecipeController;

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('', 'index')->name('home.index');
    });

Route::controller(RecipeController::class)
    ->prefix('recipes')
    ->name('recipes.')
    ->group(function () {
        Route::get('{categoryId}', 'index')->name('index')->where(['categoryId' => '[0-9]+']);
        Route::get('show/{id}', 'show')->name('show')->where(['id' => '[0-9]+']);
    });

Route::controller(HomeController::class)
    ->prefix('recipes')
    ->group(function (){
        Route::get('/{id}','show')->name('.show');
    });
