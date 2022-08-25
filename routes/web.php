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

Route::view('blog', 'blogs.list');
Route::view('blog/create', 'blogs.create');
Route::view('blog/view', 'blogs.view');

Route::view('event', 'events.list');
Route::view('event/create', 'events.create');
Route::view('event/view', 'events.view');
