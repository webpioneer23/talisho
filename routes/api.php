<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::post('endpoint/account_status','WelcomeController@account_status');
// subscrition
// Route::post('cancel_subscription', 'UserController@cancel_subscription');
// Route::post('retry_subscription', 'UserController@retry_subscription');
