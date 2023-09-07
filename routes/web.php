<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
    return redirect('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Routes dédiées au parcours utilisateur
Route::get('/login', [UserController::class, 'login'])->name('users.login');
Route::get('/register', [UserController::class, 'register'])->name('users.register');

// Routes dédiées au parcours administrateur
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/list', [AdminController::class, 'list'])->name('admin.list');
Route::get('/add', [AdminController::class, 'add'])->name('admin.add');
