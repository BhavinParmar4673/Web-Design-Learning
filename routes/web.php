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
    return view('welcome');
});

Route::get('/login', function () {
    return view('Admin.login');
});
Route::get('/reset', function () {
    return view('Admin.Resetpassword');
});
Route::get('/update', function () {
    return view('Admin.update');
});
Route::get('/notification', function () {
    return view('Admin.notification');
});
Route::get('/pushnotification', function () {
    return view('Admin.pushnotification');
});