<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::resource('/', HomeController::class);

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/dashboard-perizinan', function () {
    return view('admin/perizinan/dashboard');
});
Route::get('/dashboard-pajak', function () {
    return view('admin/pajak/dashboard');
});
Route::get('/dashboard-sipande', function () {
    return view('admin/pajak/dashboard');
});
