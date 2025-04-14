<?php

use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\BackofficeHomePageController;
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
})->name('backoffice_index');


Route::get('/backoffice/home_page', [BackofficeHomePageController::class, 'homePage'])
  ->name('backoffice_home_page')->middleware('auth');  

Route::get('/backoffice/home_page_edit', [BackofficeHomePageController::class, 'homePageEdit'])
  ->name('backoffice_home_page_edit')->middleware('auth');

Route::patch('/backoffice/home_page_edit/{homePageInfo}', [BackofficeHomePageController::class, 'homePageEditConfirm'])
  ->name('backoffice_home_page_edit_confirm')->middleware('auth');

Route::post('/backoffice/login', [BackofficeUserController::class, 'login']);
Route::post('/backoffice/logout', [BackofficeUserController::class, 'logout'])
  ->name('backoffice_logout');