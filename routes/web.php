<?php

use Illuminate\Support\Facades\Route;
use Aparedesv\LaravelMail\Http\Controllers\EmailController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
    
    Route::get('/send-email', [EmailController::class, 'index'])->name('email_index');
    Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('email_send');
});
