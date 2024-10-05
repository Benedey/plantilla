<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

require(base_path('routes/route-list/route-auth.php'));

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('eventos', EventoController::class);
Route::get('contratos/{evento}/generar', [EventoController::class, 'generarPDF'])->name('contratos.generar');


