<?php

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
    return view('dashboard');
});
Route::get('/domain', function () {
    return view('domain');
});
Route::get('/domain/setting', function () {
    return view('domain-setting');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/account/setting', function () {
    return view('account-setting-profile');
});