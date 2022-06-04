<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\PesonalController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\ExperianceController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TitleController;
use App\Http\Controllers\Admin\VisionController;
use App\Http\Controllers\Admin\OurTeamController;
use App\Http\Controllers\Admin\OurWorkController;
use App\Http\Controllers\qualificationController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\OurClientController;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::resource('OurWork',OurWorkController::class);
    Route::resource('personal',PesonalController::class);
    Route::resource('qualification',qualificationController::class);
    Route::resource('experiance',ExperianceController::class);
    Route::resource('skills',SkillsController::class);
    Route::resource('language',LanguageController::class);
    



    
});

Route::get('/',[WebsiteController::class ,'index']);
    // return bcrypt(123);
   // $2y$10$SXZMwzQsvx8xJeLmCj.MLebuKSBST02czwoy85ryZyG5C3VXfPwxO

