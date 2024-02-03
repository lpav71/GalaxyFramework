<?php

use Pecee\SimpleRouter\SimpleRouter as Route;

Route::get('/', [Galaxy\Controllers\DefaultController::class, 'home'])->name('home');
Route::get('/contact', [Galaxy\Controllers\DefaultController::class, 'contact'])->name('contact');