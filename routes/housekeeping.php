<?php

use App\Http\Controllers\Admin\CitaitvsController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CochesController;
use App\Http\Controllers\Admin\ItvsController;
use App\Http\Controllers\Admin\NotificationsController;
use App\Http\Controllers\Admin\RutasController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class, 'index'])->name('housekeeping.home');
Route::resource('users', UsersController::class)->names('housekeeping.users');
Route::resource('coches', CochesController::class)->parameters(['coches' => 'coche'])->names('housekeeping.coches');
Route::resource('itvs/citas', CitaitvsController::class)->names('housekeeping.citaitvs');
Route::resource('itvs', ItvsController::class)->names('housekeeping.itvs');
Route::resource('rutas', RutasController::class)->names('housekeeping.rutas');

Route::get('notifications/get', [NotificationsController::class, 'getNotificationsData'])
    ->name('notifications.get');