<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransporteController;
use App\Http\Controllers\CamionController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [TransporteController::class, 'index1'])->name('transporte.index');
Route::get('/create', [TransporteController::class, 'create1'])->name('transporte.create');
Route::get('/edit', [TransporteController::class, 'edit1'])->name('transporte.edit');
/*
Route::get('/', [CamionController::class, 'index2'])->name('camion.index');
Route::get('/create', [CamionController::class, 'create2'])->name('camion.create');
Route::get('/edit', [CamionController::class, 'edit2'])->name('camion.edit');*/