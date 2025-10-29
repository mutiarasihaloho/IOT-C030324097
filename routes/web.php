<?php

use Illuminate\Support\Facades\Route;

//lamps
Route::get('/', [App\Http\Controllers\LampController::class, 'index'])->name('lamps.index');

//update lamps
Route::post('/lamps/{id}', [App\Http\Controller::class, 'updateLamp'])->name('lamps.update');
