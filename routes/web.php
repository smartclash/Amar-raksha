<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\TimelineController;
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

Route::view('/', 'welcome')->name('welcome');

Route::get('home', [HomeController::class, 'home'])->name('home');

Route::post('institutions/{institution:id}/admin', [InstitutionController::class, 'createAdmin'])
    ->name('institutions.create.admin');
Route::post('institutions/{institution:id}/volunteer/create', [InstitutionController::class, 'volunteerForm'])
    ->name('institutions.create.volunteer');
Route::get('institutions/{institution:id}/volunteer', [InstitutionController::class, 'listVolunteer'])
    ->name('institutions.volunteer');
Route::post('institutions/{institution:id}/volunteer/create', [InstitutionController::class, 'createVolunteer']);
Route::resource('institutions', InstitutionController::class);

Route::resource('blogs', BlogController::class);

Route::resource('events', EventController::class);

Route::resource('events.timeline', TimelineController::class)->scoped([
    'timeline' => 'id'
]);

Route::resource('notifications', NotificationController::class);

Route::prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
});

require __DIR__.'/auth.php';
