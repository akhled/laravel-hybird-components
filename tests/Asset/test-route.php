<?php

use Illuminate\Support\Facades\Route;

Route::view('/button', 'test-view::button');

// Modals
Route::view('/modal/default', 'test-view::modal.default');