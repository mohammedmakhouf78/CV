<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailsController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', [MainPageController::class, 'home'])->name('home.home');
Route::get('/home', [MainPageController::class, 'home'])->name('home.home');
Route::get('/admin', [HomeController::class, 'index'])->name('admin.dashboard');


Route::get('profile/index', [ProfileController::class, 'index'])->name('profile.index');
Route::get('profile/create', [ProfileController::class, 'create'])->name('profile.create');
Route::post('profile/created', [ProfileController::class, 'store'])->name('profile.store');
Route::delete('profile/{profile}/delete', [ProfileController::class, 'destroy'])->name('profile.delete');


Route::get('work/index', [WorkController::class, 'index'])->name('work.index');
Route::get('work/create', [WorkController::class, 'create'])->name('work.create');
Route::post('work/created', [WorkController::class, 'store'])->name('work.store');
Route::delete('work/{work}/delete', [WorkController::class, 'destroy'])->name('work.delete');

Route::post('mail/message', [MailsController::class, 'message'])->name('mail.message');

Auth::routes();
