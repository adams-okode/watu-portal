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


Route::get('/','ViewController@index');


Route::prefix('customers')->group(function () {

    Route::get('/','Customers\ViewsController@index');
    Route::get('/create','Customers\CustomersController@index');
    Route::get('/view/details','Customers\CustomersController@ViewCustomer');
    Route::post('/create','Customers\CustomersController@create');
    Route::post('/update','Customers\CustomersController@update');
    Route::get('/delete','Customers\CustomersController@delete');
    Route::get('/register/stripe','Customers\CustomersController@registerStripe');
    Route::get('/transactions','Customers\CustomersController@customer_transactions');
    Route::post('/cards/update','Customers\CustomersController@customer_cards');

});


Route::prefix('settings')->group(function () {

    Route::get('/','Settings\ViewsController@index');


});
