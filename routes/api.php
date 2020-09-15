<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getMarkets/{cityID}/{status?}', 'ProcessController@getMarkets');
Route::get('getCitiesByState/{statesID}/{status?}', 'ProcessController@getCitiesByState');
Route::get('getMarketsByCity/{cityID}/{status?}', 'ProcessController@getMarketsByCity');
Route::get('getTagsByCategory/{categoryID}/{status?}', 'ProcessController@getTagsByCategory');