<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\User;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'PassportController@login');
Route::post('register', 'PassportController@register');

Route::get('/user', [User::class, 'get']);
Route::post('/user/store', [User::class, 'store'])->middleware('auth:api');
Route::post('/user/delete/{id}', [User::class, 'delete'])->middleware('auth:api');
