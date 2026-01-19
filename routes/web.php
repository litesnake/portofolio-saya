<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Halaman Projects
Route::get('/projects', function () {
    return view('projects');
})->name('projects');

// Halaman Organization
Route::get('/organization', function () {
    return view('organization');
})->name('organization');
