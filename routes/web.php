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

Route::view('/', 'welcome');
Route::view('login', 'auth.login');
Route::view('admin/dashboard', 'admin.dashboard');
Route::view('institutions/dashboard', 'institutions.dashboard');
Route::view('volunteers/dashboard', 'volunteers.dashboard');
