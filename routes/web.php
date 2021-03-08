<?php

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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/pop-up-tel', function () {
    return view('pop-up-tel');
});
Route::get('/pop-up-horario', function () {
    return view('pop-up-horario');
});
Route::get('/pop-up-mail', function () {
    return view('pop-up-mail');
});
