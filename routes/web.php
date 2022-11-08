<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],

function()
{
    Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('index');
    Route::get('about', [App\Http\Controllers\FrontController::class, 'about'])->name('about');

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\DashboradController::class, 'index'])->name('home');
});


