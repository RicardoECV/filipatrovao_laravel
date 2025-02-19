<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home']);

Route::get('/aboutme', function () {
  return view('aboutme');
});

Route::get('/research', function () {
  return view('research');
});

Route::get('/scicomm', function () {
  return view('scicomm');
});
