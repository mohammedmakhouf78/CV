<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainPageController::class, 'home'])->name('home.home');
Route::get('/home', [MainPageController::class, 'home'])->name('home.home');
Route::get('/admin', [HomeController::class, 'index'])->name('admin.dashboard');


Route::get('profile/index', [ProfileController::class, 'index'])->name('profile.index');
Route::get('profile/create', [ProfileController::class, 'create'])->name('profile.create');
Route::post('profile/created', [ProfileController::class, 'store'])->name('profile.store');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
