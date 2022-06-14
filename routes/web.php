<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;

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

/**
 * User registration.
 */
Route::get('/inscription', [UserController::class, 'create'])->name('register');
Route::post('/users', [UserController::class, 'store']);

/**
 * User authentication.
 */
Route::get('/connexion', [UserController::class, 'login'])->name('login');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

/**
 * User logout.
 */
Route::post('/logout', [UserController::class, 'logout']);

/**
 * User profile.
 */
Route::get('/profile', [UserProfileController::class, 'index'])->name('profile');
Route::post('/profile', [UserProfileController::class, 'store']);

/**
 * Display user's post.
 */
Route::get('/posts/{username}', [PostController::class, 'index']);
