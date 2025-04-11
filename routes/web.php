<?php

use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\BackofficeUserController;
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

Route::get('/backoffice', function() {
  return view('backoffice_index');
});


Route::get('/backoffice/home_page', function() {
  return view('backoffice_home_page');
})->name('backoffice_home_page')->middleware('auth');  

Route::post('/backoffice/login', [BackofficeUserController::class, 'login']);
Route::post('/backoffice/logout', [BackofficeUserController::class, 'logout'])
  ->name('backoffice_logout');