<?php

use App\Http\Controllers\CitaitvsController;
use App\Http\Controllers\CochesController;
use App\Http\Controllers\ItvsController;
use App\Http\Controllers\SegurosController;
use Illuminate\Support\Facades\Route;


Route::resource('coches', CochesController::class)->parameters(['coches' => 'coche'])->names('coches')->except('coches.create', 'coches.edit');

Route::resource('itvs', ItvsController::class)->names('itvs');
Route::resource('itvs/citas', CitaitvsController::class)->names('citaitvs');

Route::resource('seguros', SegurosController::class)->names('seguros');