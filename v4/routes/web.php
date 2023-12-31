<?php

use App\Http\Controllers\GuestBookController;
use App\Http\Controllers\BlogCSVDownloadController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\GuestBookDownloadController;
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

Route::group([
    'middleware' => 'send_statistic'
], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/welcome', [WelcomeController::class, 'welcome'])
        ->name('welcome');

    Route::get('/about_me', [AboutMeController::class, 'aboutMe'])
        ->name('about_me');
        
    Route::group([
        'prefix' => '/contact',
        'as' => 'contact.'
    ], function () {
        Route::get('/index', [ContactController::class, 'contact'])
            ->name('index');

        Route::post('/store', [ContactController::class, 'store'])
            ->name('store');
    });

    Route::get('/hobby', [HobbyController::class, 'hobby'])
        ->name('hobby');

    Route::get('/study', [StudyController::class, 'study'])
        ->name('study');

    Route::get('/history', [HistoryController::class, 'history'])
        ->name('history');

    route::group([
        'prefix' => '/test',
        'as' => 'test.'
    ], function () {
        Route::get('/index', [TestController::class, 'index'])
            ->name('index');

        Route::post('/store', [TestController::class, 'store'])
            ->name('store');
    });

    Route::get('/album', [AlbumController::class, 'album'])
        ->name('album');

    Route::group([
        'prefix' => '/guest/book',
        'as' => 'guest.book.'
    ], function () {
        Route::get('/index', [GuestBookController::class, 'index'])
            ->name('index');

        Route::post('/store', [GuestBookController::class, 'store'])
            ->name('store');

        Route::get('/download/index', [GuestBookDownloadController::class, 'index'])
            ->name('download.index');
    });


    Route::group([
        'prefix' => '/blog',
        'as' => 'blog.'
    ], function () {
        Route::get('/index', [BlogController::class, 'index'])
            ->name('index');

        Route::get('/{post}/show', [BlogController::class, 'show'])
            ->name('show');
    });
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';