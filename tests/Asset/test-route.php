<?php

use Illuminate\Support\Facades\Route;

Route::view('/button', 'test-view::button');
Route::view('/modal/default', 'test-view::modal.default');

// Navs
Route::view('/nav/base', 'test-view::nav.base');
Route::view('/nav/dismissible', 'test-view::nav.dismissible');