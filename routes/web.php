<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

Route::view('/', 'home_0011');
Route::get("pasien", [PasienController::class, 'index'])->name("pasien.index");
Route::post("pasien-import", [PasienController::class, 'import'])->name("pasien.import");
