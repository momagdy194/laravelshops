<?php

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
use Illuminate\Support\Facades\Route;

// Route::get('unit','DataImportController@importUnits');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['auth', 'user_is_admin'], function () {

//units
    Route::get('unites', 'UnitesController@index')->name('unites');
    Route::post('unites','UnitesController@store');
    Route::delete('unites','UnitesController@delete');
    Route::get('search-units','UnitesController@search')->name('search-units');


//categories
Route::get('categories','CategoriesController@index')->name('categories');

    //product
    Route::get('product', 'ProductController@index')->name('product');

    //tags
    Route::get('tags', 'TagController@index')->name('tags');
    Route::post('tags','TagController@store');

    //payment
    Route::get('payment', 'PaymentController@index')->name('payment');

    //orders
    Route::get('orders', 'OrderController@index')->name('orders');

    //shipment
    Route::get('shipment', 'ShipmentController@index')->name('shipment');


    //countries
    Route::get('countries','CountriesController@index')->name('countries');
    //cities
    Route::get('cities','CitiesController@index')->name('cities');
    //states
    Route::get('states','StatesController@index')->name('states');

    //reviews
    Route::get('reviews','ReviewController@index')->name('reviews');

    //tickets
    Route::get('tickets', 'TiketController@index')->name('tickets');


    //roles
    Route::get('roles', 'RoleController@index')->name('roles');


});

