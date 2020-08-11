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

    Route::get('/', function () {
        return view('landing');
    })->name('homepage');

    Route::get('/email', function () {
        return view('Emails.registration');
    })/*->name('homepage')*/;

    Route::post('event/submit-registration-form', [
        'as' => 'event.submit-registration-form',
        'uses' => 'AttendeeController@register'
    ]);

    Route::get('/login', function () {
        return view('Admin.login');
    })->name('login');

    Route::post('user/login', [
        'uses' => 'Auth\AuthController@Login',
        'as' => 'user.login'
    ]);

    Route::get('/admin/dashboard', [
        'uses' => 'Auth\AuthController@Dashboard',
        'as' => 'admin.dashboard'
    ]);


