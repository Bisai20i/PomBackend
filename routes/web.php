<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login');
// });
Route::get('sendmail',[MailController::class,'sendEmail']);

Route::controller(AuthController::class)->group(function(){
    Route::get('/','index')->name('loginpage');
    Route::get('signup','signup')->name('signup');
    Route::post('/createuser', 'create')->name('user.create');
    Route::post('/login', 'login')->name('login');
    Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware('can:isLoggedin');
    Route::get('/logout', 'logout')->name('logout')->middleware('can:isLoggedin');
    Route::get('/createAdmin', 'createAdmin');
    Route::get('/forgetpassword', 'forgetpassword')->name('forgetpassword');
    Route::post('/resetpassword', 'resetpassword')->name('resetpassword');
    Route::post('/finduser', 'finduser')->name('finduser');
    Route::post('/updatepassword', 'updatepassword')->name('updatepassword');
});

Route::view('/entertoken','layout.entertoken')->name('entertoken');
Route::view('/resetpassword','layout.resetpassword')->name('resetpassword');

Route::middleware('can:isLoggedin')->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/dashboard/admin', 'admin')->name('dashboard.admin');
        Route::get('/dashboard/notice', 'notice')->name('dashboard.notice');
        Route::get('/dashboard/market', 'market')->name('dashboard.market');
        // Route::get('/dashboard/market/toggle/{id}', 'togglestatus')->name('togglestatus');
        Route::post('/dashboard/market/buydog', 'buydog')->name('buydog');
        Route::get('/dashboard/selldog', 'selldog')->name('selldog')->middleware('can:isAdmin');
        Route::get('/dashboard/sold/{id}', 'dogsold')->name('dogsold')->middleware('can:isAdmin');
    });
});
// Route::controller(DashboardController::class)->group(function(){
//     Route::get('/dashboard/admin', 'admin')->name('dashboard.admin')->middleware('can:isLoggedin');
//     Route::get('/dashboard/setting', 'setting')->name('dashboard.setting')->middleware('can:isLoggedin');
//     Route::get('/dashboard/market', 'market')->name('dashboard.market')->middleware('can:isLoggedin');
//     Route::get('/dashboard/market/toggle/{id}', 'togglestatus')->name('togglestatus')->middleware('can:isLoggedin');
// });

Route::resource('dogs',DogController::class)->middleware('can:isLoggedin');