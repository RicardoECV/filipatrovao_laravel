<?php

use App\Http\Controllers\AboutmeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Console\AboutCommand;

Route::get('/', [HomeController::class, 'home']);

Route::get('/aboutme', [AboutmeController::class, 'aboutme'])
  ->name('aboutmepage');

Route::get('/research', function () {
  return view('research');
});

Route::get('/scicomm', function () {
  return view('scicomm');
});
