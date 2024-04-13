<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Admin::class, 'signup'])
    ->middleware('auth', 'role');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/books', [Controller\Site::class, 'books']);
Route::add('GET', '/readers', [Controller\Site::class, 'readers']);
Route::add('GET', '/book', [Controller\Site::class, 'book']);
Route::add('GET', '/reader', [Controller\Site::class, 'reader']);
Route::add(['GET', 'POST'], '/add_book', [Controller\Add::class, 'add_book']);
Route::add(['GET', 'POST'], '/add_reader', [Controller\Add::class, 'add_reader']);
