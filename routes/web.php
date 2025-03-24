<?php

use App\Http\Controllers\AboutmeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\ScicommController;
use Illuminate\Foundation\Console\AboutCommand;

Route::get('/', [HomeController::class, 'home'])
  ->name('home');

Route::get('/aboutme', [AboutmeController::class, 'aboutme'])
  ->name('aboutmepage');

Route::get('/research', [ResearchController::class, 'research'])
  ->name('researchpage');

Route::get('/scicomm', [ScicommController::class, 'scicomm'])
  ->name('scicommpage');
