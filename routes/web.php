<?php

use Illuminate\Support\Facades\Route;


// Route::prefix('admin')->name('admin.')function(){

//     // Route::get('/',[AdminController::class,'index'])->name('index');

// }
Route::get('/', function () {
    return view('index');
});
