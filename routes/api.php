<?php

use Illuminate\Http\Request;
use App\club;

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


Route::get('clubs', 'ClubController@index');
Route::get('clubs/{club}', 'ClubController@show');
Route::post('clubs', 'ClubController@create');
Route::put('clubs/{club}', 'ClubController@update');
Route::delete('clubs/{club}', 'ClubController@delete');


