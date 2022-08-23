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
Route::apiResource('institution', InstitutionController::class);
Route::post('institution/{institution:id}/admin', [InstitutionController::class, 'createAdmin']);
Route::post('institution/{institution:id}/volunteer', [InstitutionController::class, 'createVolunteer']);

require __DIR__.'/auth.php';
