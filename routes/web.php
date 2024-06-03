<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('components.screen.mainScreen');
})->name('home');

Route::post('/contact_mail',[MailController::class,'contact_mail_send']);

Route::get('/contact',function(){
    return view('components.screen.contactScreen');
})->name('contact_mail');
Route::get('/blog',function(){
    return view('components.screen.blogScreen');
})->name('blog');
Route::get('/service',function(){
    return view('components.screen.serviceScreen');
})->name('service');

Route::prefix('work')->group(function () {
    Route::get('/', function () {
        return view('components.screen.workScreen');
    })->name('work');
    Route::get('/neel', function () {
        return view('components.screen.neelScreen');
    })->name('work.neel');
});
