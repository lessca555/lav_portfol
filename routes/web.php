<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/indo', [HomeController::class, 'index2'])->name('indo');
Route::get('/project/{id}', [ProjectController::class, 'detail'])->name('detail');
Route::get('/project/cms/add', [ProjectController::class, 'index'])->middleware(['auth'])->name('add_view');
Route::post('/project/cms/add_post', [ProjectController::class, 'store'])->name('create_post');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login_post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
