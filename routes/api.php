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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('getLiveChatTranscripts', 'IndexController@getLiveChatTranscripts');
Route::post('saveLiveChatTranscripts', 'IndexController@saveLiveChatTranscripts');
Route::post('keywordsearch', 'AirportsController@keywordsearch');

Route::post('test','IndexController@checkansver');
