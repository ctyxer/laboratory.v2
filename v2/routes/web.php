<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\about_meController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\hobbyController;
use App\Http\Controllers\studyController;
use App\Http\Controllers\historyController;
use App\Http\Controllers\testController;
use App\Http\Controllers\albumController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/welcome', [WelcomeController::class, 'welcome'])
    ->name('welcome');

Route::get('/about_me', [about_meController::class, 'about_me'])
    ->name('about_me');

Route::get('/Contact', [ContactController::class, 'Contact'])
    ->name('contact');

Route::get('/hobby', [hobbyController::class, 'hobby'])
    ->name('hobby');

Route::get('/study', [studyController::class, 'study'])
    ->name('study');

Route::get('/history', [historyController::class, 'history'])
    ->name('history');

Route::get('/test', [testController::class, 'test'])
    ->name('test');

Route::get('/album', [albumController::class, 'album'])
    ->name('album');