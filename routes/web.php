<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return 'Welcome to the homepage!';
   })->name('home');
   Route::get('/about', function () {
    return 'About Us';
   })->name('about');
   Route::get('/contact/{name}', function ($name) {
    return 'Contact ' . $name;
   })->name('contact');

   Route::prefix('admin')->group(function () {
    Route::get('/', function () {
    return 'Admin Dashboard';
    })->name('admin.dashboard');
    Route::get('/users', function () {
    return 'Admin Users';
    })->name('admin.users');
   });

Route::get('/', function () {
    return view('welcome');
});
