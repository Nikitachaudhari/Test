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
    return view('welcome');
});
Route::get('/form', function () {
    return view('theme');
});

Route::get('/page', function () {
    return view('displayall');
});

Route::get('/employees','employeecontroller@index');

Route::get('/employees1','employeecontroller@create');

Route::get('/employee1','employeecontroller@show');
