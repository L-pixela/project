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

    Route::get('/users',function (){
        return 'Welcome Users to our page!!!';
    })->name('users');

    Route::get('/students',function (){
        return 'Welcome Students to our page!!!';
    })->name('students');

    Route::get('/teacher',function (){
        return 'Welcome Teacher to our page!!!';
    })->name('teacher');

    Route::get('/subject',function (){
        return 'Here are the Subject of our page!!!';
    })->name('subject');

    Route::get('/acedemic',function (){
        return 'Here are the acedemic of our page!!!';
    })->name('acedemic');

// Route::get('/', function () {
//     return 'Welcome to the homepage!';
//    })->name('home');
//    Route::get('/about', function () {
//     return 'About Us';
//    })->name('about');
//    Route::get('/contact/{name}', function ($name) {
//     return 'Contact ' . $name;
//    })->name('contact');

   Route::prefix('admin')->group(function () {
    Route::get('/', function () {
    return 'Admin Dashboard';
    })->name('admin.dashboard');
    Route::get('/users', function () {
    return 'Admin Users';
    })->name('admin.users');
   });

   Route::get('/about', function () {
    return view('about');
   });


   Route::get('/contact', function () {
    return view('contact');
   });
