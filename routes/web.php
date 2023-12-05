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
Route::get('/domains', function () {
    return view('domains');
});
Route::get('/domains/setting', function () {
    return view('domains-setting');
});
Route::get('/accounts', function () {
    return view('accounts');
});
Route::get('/accounts/setting', function () {
    return view('accounts-setting-profile');
});