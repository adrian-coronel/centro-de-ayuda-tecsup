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

# CONTROL DE ACCESO AUTH0
// Route::get('/', [function () {
//   if (! auth()->check()) {
//     return response('You are not logged in.');
// }

// $user = auth()->user();
// $name = $user->name ?? 'User';
// $email = $user->email ?? '';
// }]);

Route::get('/scope', function () {
  return response('You have the `read:messages` permissions, and can therefore access this resource.');
})->middleware('auth')->can('read:messages');

Route::get('/private', function () {
  return response('Welcome! You are logged in.');
})->middleware('auth');


// Route::get('/login', function(){
//     return view('auth.login');
// })->name('login');
// Route::get('/register', function(){
//     return view('auth.register');
// })->name('register');

Route::get('/', function (){return view('home');});
Route::get('/services',[ServiceController::class, 'index'])->name('services.index')->middleware('auth');
Route::get('/incidents', [IncidentController::class, 'index'])->name('incidents.index')->middleware('auth');
Route::post('/incidents', [IncidentController::class, 'store'])->name('incidents.store')->middleware('auth');
Route::get('/incidents/{selectIdService}/create', [IncidentController::class, 'create'])->name('incidents.create')->middleware('auth');