<?php

use App\Http\Controllers\IncidentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|y
*/


Route::get('/login', function(){
    return view('auth.login');
})->name('login');
Route::get('/register', function(){
    return view('auth.register');
})->name('register');

Route::get('/services',[ServiceController::class, 'index'])->name('services.index');
Route::get('/incidents', [IncidentController::class, 'index'])->name('incidents.index');
Route::post('/incidents', [IncidentController::class, 'store'])->name('incidents.store');
Route::get('/incidents/{selectIdService}/create', [IncidentController::class, 'create'])->name('incidents.create');