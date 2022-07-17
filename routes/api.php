<?php

use App\Http\Controllers\AuthControlle;
use App\Http\Controllers\Categories\CategController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('signup', [AuthControlle::class, 'signup']);
Route::get('all-users', [AuthControlle::class, 'Allusers']);
Route::post('login', [AuthControlle::class, 'login']);
Route::post('addcateg', [CategController::class,'Addcateg']);
Route::get('all', [CategController::class,'AllCateg']);
