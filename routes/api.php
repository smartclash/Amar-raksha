<?php

use App\Http\Controllers\InstitutionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('user', fn() => \request()->user())->middleware('auth:sanctum');

Route::post('institutions/{institution:id}/admin', [InstitutionController::class, 'createAdmin']);
Route::post('institutions/{institution:id}/volunteer', [InstitutionController::class, 'createVolunteer']);
Route::apiResource('institutions', InstitutionController::class);

Route::apiResource('blogs', \App\Http\Controllers\BlogController::class);

Route::post('events/{type}', [\App\Http\Controllers\EventController::class, 'store']);
Route::apiResource('events', \App\Http\Controllers\EventController::class);

Route::apiResource('events.timeline', \App\Http\Controllers\TimelineController::class)->scoped([
    'timeline' => 'id'
]);

require __DIR__.'/auth.php';
