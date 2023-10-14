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
    return view('front.layouts.App');
})->name('index');

Route::get('/Doctors', function () {
    return view('front.pages.indexDoctor');
})->name('Doctors');


Route::get('/majors', function () {
    return view('front.pages.majors');
})->name("majors");

Route::get('/login', function () {
    return view('front.pages.login');
})->name("login");

Route::get('/Contact', function () {
    return view('front.pages.Contact');
})->name("Contact");
Route::get('/Doctors/book', function () {
    return view('front.pages.doctor');
})->name("Doctors.book");
