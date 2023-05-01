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
});


Route::post('/api/login', [\App\Http\Controllers\Api\ApiController::class, "authenticate"]);
Route::post('/api/register', [\App\Http\Controllers\Api\ApiController::class, "register"]);

Route::get('/api/index', [\App\Http\Controllers\Api\IndexController::class, "index"]);

Route::group(['middleware' => ['jwt.verify']], function () {
    Route::get('/api/logout', [\App\Http\Controllers\Api\ApiController::class, "logout"]);
    Route::post('/api/get_user', [\App\Http\Controllers\Api\ApiController::class, "get_user"]);
});


Auth::routes();