<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/services',[ServiceController::class, 'index'])->name('services.index');

Route::get('/login', function(){
    return view('auth.login');
})->name('login');
Route::get('/register', function(){
    return view('auth.register');
})->name('register');

Route::get('/incidents/create',function(){ return view('incident.create');})->name('incidents.create');