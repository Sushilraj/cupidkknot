<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Front\CupidknotController;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::prefix('/')->namespace('Front')->group(function(){
    Route::get('/',[CupidknotController::class, 'index']);
    Route::match(['get','post'],'/signin',[CupidknotController::class, 'signin']);
    Route::post('/register',[CupidknotController::class, 'register']);
    Route::get('/profile',[CupidknotController::class, 'profile']);
    Route::post('/user-filter',[CupidknotController::class, 'userFilter']);
});

// Google URL
Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [CupidknotController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [CupidknotController::class, 'callbackFromGoogle'])->name('callback');
});

Route::prefix('/admin')->namespace('Admin')->group(function(){
    Route::match(['get','post'],'/',[AdminController::class, 'login']);
    Route::group(['middleware'=>['admin']], function(){
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        Route::get('/logout', [AdminController::class, 'logout']);
        Route::post('/user-filter-by-age',[AdminController::class, 'userFilterByAge']);
        Route::post('/user-filter-by-income',[AdminController::class, 'userFilterByIncome']);
    });
});




Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Route::get('/config-clear', function() {
    Artisan::call('config:clear');
    return "Cache is cleared";
});
Route::get('/route-clear', function() {
    Artisan::call('route:cache');
    return "Route is cleared";
});
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return "Cache is cleared";
});

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "Cleared!";
});