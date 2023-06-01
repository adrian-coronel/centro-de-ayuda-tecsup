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

// LOGIN CON AUTH0
Route::get('/private', function () {
    return response('Welcome! You are logged in.');
  })->middleware('auth');
  
  Route::get('/scope', function () {
      return response('You have `read:messages` permission, and can therefore access this resource.');
  })->middleware('auth')->can('read:messages');
  
Route::get('/', function () {
  if (! auth()->check()) {
    return response('You are not logged in.');
  }

  $user = auth()->user();
  $name = $user->name ?? 'User';
  $email = $user->email ?? '';

  return response($user);
});


// Route::get('/login', function(){
//     return view('auth.login');
// })->name('login');
// Route::get('/register', function(){
//     return view('auth.register');
// })->name('register');

Route::get('/services',[ServiceController::class, 'index'])->name('services.index');
Route::get('/incidents', [IncidentController::class, 'index'])->name('incidents.index');
Route::post('/incidents', [IncidentController::class, 'store'])->name('incidents.store');
Route::get('/incidents/{selectIdService}/create', [IncidentController::class, 'create'])->name('incidents.create');