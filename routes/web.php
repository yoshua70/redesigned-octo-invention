<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', [UserController::class, 'create'])->name('register');
Route::get('/connexion', [UserController::class, 'login'])->name('login');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/users', [UserController::class, 'store']);
