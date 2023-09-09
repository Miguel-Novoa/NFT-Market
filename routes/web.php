<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NftController;
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
Route::post('/register', [UserController::class, 'store'])->name('users.store');
Route::post('/authentificate', [UserController::class, 'authentificate'])->name('users.authentificate');
Route::get('/logout', [UserController::class, 'logout'])->name('users.logout');
Route::get('/collection', [UserController::class, 'collection'])->name('users.collection');

// Routes dédiées au parcours administrateur
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');;
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/list', [AdminController::class, 'list'])->name('admin.list');
Route::get('/admin/add', [AdminController::class, 'add'])->name('admin.add');
Route::post('/admin/authentificate', [AdminController::class, 'authentificate'])->name('admin.authentificate');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Routes dédiées aux NFTs
Route::post('/nft/create', [NftController::class, 'store'])->name('nft.store');
Route::delete('/nft/{nft}', [NftController::class, 'destroy'])->name('nft.destroy');
Route::post('/nft/buy/{nft}', [NftController::class, 'buy'])->name('nft.buy');
Route::post('/nft/sell/{nft}', [NftController::class, 'sell'])->name('nft.sell');
