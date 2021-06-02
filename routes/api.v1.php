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

//API V1
/* 
* Auth
*/
Route::post('login', 'App\Http\Controllers\API\V1\Globals\UserController@login');
Route::post('register', 'App\Http\Controllers\API\V1\Globals\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){

    /**
     * User
     */
	Route::get('detail', 'App\Http\Controllers\API\V1\Globals\UserController@detail');
	Route::get('logout', 'App\Http\Controllers\API\V1\Globals\UserController@logout');

    /**
     * gambar
     */
	Route::get('train', 'App\Http\Controllers\API\V1\Projects\GambarController@trainHuruf');
	Route::get('soalAngka', 'App\Http\Controllers\API\V1\Projects\GambarController@getSoalAngka');
	Route::post('predict', 'App\Http\Controllers\API\V1\Projects\GambarController@predict');

});
