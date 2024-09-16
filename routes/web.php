<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
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

Route::get('/', 'ExampleController@index');
Route::get('/login', 'AuthenticationController@index')->name('login');
Route::post('/auth', 'AuthenticationController@authAction')->name('auth.action');

Route::get('/dashboard', 'DashboardController@index');
Route::get('/add-mahasiswa', 'DashboardController@create');
Route::get('/edit-mahasiswa/{nrp}', 'DashboardController@edit');
Route::post('/add-mahasiswa/new', 'DashboardController@store');
Route::post('/update/{nrp}', 'DashboardController@update');
Route::get('/delete-mahasiswa/{nrp}','DashboardController@delete_mahasiswa');