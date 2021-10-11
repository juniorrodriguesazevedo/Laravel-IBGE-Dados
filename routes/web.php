<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StateController;

Route::get('/{id}', [StateController::class, 'index'])->name('state.index');
Route::post('/store', [StateController::class, 'store'])->name('state.store');