<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SibisaController;
use App\Http\Controllers\DasawismaController;
// use App\Http\Controllers\DarkModeController;
// use App\Http\Controllers\ColorSchemeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
// Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');

// Home/Beranda
Route::get('/', [HomeController::class, 'index']);
// Data Aplikasi Sibisa
Route::get('sibisa-dashboard', [SibisaController::class, 'index'])->name('sibisa');
// Data Aplikasi Dasawisma
Route::get('dasawisma-dashboard', [DasawismaController::class, 'index'])->name('dasawisma');
