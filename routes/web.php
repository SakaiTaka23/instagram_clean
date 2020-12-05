<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix' => 'user', 'middleware' => ['auth']], function () {
    Route::get('/', [PostController::class, 'index'])->name('PostIndex');
    Route::get('/p/create', [PostController::class, 'create'])->name('postCreate');
    Route::get('/p/{post}', [PostController::class, 'show'])->name('postShow');
    Route::post('/p', [PostController::class, 'store'])->name('postStore');

    Route::get('/profile{user}', [ProfileController::class, 'show'])->name('profileShow');
});
