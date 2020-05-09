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
//get Catogery
Route::get('categories','Api\CategoriesController@index');
Route::get('tag','Api\TagController@index');
Route::get('product','Api\ProductController@index');
Route::get('Country','Api\CountryController@index');




Route::post('auth/register','Api\Authcontroller@register');
Route::post('auth/login','Api\Authcontroller@login');



Route::group(['auth:api'], function () {
    
});


