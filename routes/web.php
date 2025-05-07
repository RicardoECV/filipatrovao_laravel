<?php

use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\BackofficeAboutmePageController;
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

// Route::get('/backoffice', function() {
//   return view('backoffice_index');
// })->name('backoffice_index');

Route::view('/backoffice', 'backoffice_index')->name('backoffice_index');

Route::controller(BackofficeUserController::class)->group(function(){
  Route::post('/backoffice/login', 'login');
  Route::post('/backoffice/logout', 'logout')->name('backoffice_logout');
});

Route::middleware('auth')->group(function(){

  Route::controller(BackofficeHomePageController::class)->group(function(){
    Route::get('/backoffice/home_page', 'homePage')->name('backoffice_home_page');
    Route::get('/backoffice/home_page_edit', 'homepageEdit')->name('backoffice_home_page_edit');
    Route::patch('/backoffice/home_page_edit/{homePageInfo}', 'homePageEditConfirm')->name('backoffice_home_page_edit_confirm');  
  });

  Route::controller(BackofficeAboutmePageController::class)->group(function(){
    Route::get('/backoffice/aboutme_page', 'aboutmePage')->name('backoffice_aboutme_page');
  });

});


// Route::get('/backoffice/home_page', [BackofficeHomePageController::class, 'homePage'])
//   ->name('backoffice_home_page')->middleware('auth');  

// Route::get('/backoffice/home_page_edit', [BackofficeHomePageController::class, 'homePageEdit'])
//   ->name('backoffice_home_page_edit')->middleware('auth');

// Route::patch('/backoffice/home_page_edit/{homePageInfo}', [BackofficeHomePageController::class, 'homePageEditConfirm'])
//   ->name('backoffice_home_page_edit_confirm')->middleware('auth');

// Route::get('/backoffice/aboutme_page', [BackofficeAboutmePageController::class, 'aboutmePage'])
//   ->name('backoffice_aboutme_page')->middleware('auth');

// Route::post('/backoffice/login', [BackofficeUserController::class, 'login']);
// Route::post('/backoffice/logout', [BackofficeUserController::class, 'logout'])
//   ->name('backoffice_logout');