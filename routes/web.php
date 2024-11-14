<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;

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
    return view('main');
});

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/client', [ClientController::class, 'index'])->name('client.index');
});

Route::post('/auth', [UserController::class, 'auth'])->name('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);



Route::get('admin/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('admin/category', [CategoryController::class, 'store'])->name('category.store');
Route::delete('admin/category', [CategoryController::class, 'destroy'])->name('category.destroy');


Route::get('admin/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('admin/category', [CategoryController::class, 'store'])->name('category.store');
Route::delete('admin/category', [CategoryController::class, 'destroy'])->name('category.destroy');