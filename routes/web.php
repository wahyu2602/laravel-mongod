<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route HOME
Route::get('/', function () {
  return view('pages.admin.dashboard');
});

// Route Auth
Route::get('/login', function () {
  return view('pages.auth.login');
});

Route::get('/register', function () {
  return view('pages.auth.register');
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
