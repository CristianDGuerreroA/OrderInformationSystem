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

/* 
This is the first page for the user, here is the autentication
*/
Route::get('/', function () {
    return view('auth.login');
});


Route::get('/menu', 'App\Http\Controllers\MenuController@index');

//Test for the route of the admin users
Route::resource('/users','App\Http\Controllers\UserController');

//Test for the route of the input params 
Route::get('/orders/inputparams',  'App\Http\Controllers\OrderController@input');


//Test for the route of the generate PDF
Route::get('/orders/{idorder?}/pdf',  'App\Http\Controllers\OrderController@pdf');

//Route for search filter.
Route::get('/orders/search',  'App\Http\Controllers\OrderController@search');

//Route for view all orders with PDF
Route::get('/orders/listpdf',  'App\Http\Controllers\OrderController@orderspdf');

//Route for view all orders with PDF
Route::get('/orders/listedit',  'App\Http\Controllers\OrderController@ordersedit');

//Test for the route of the orders
Route::resource('/orders','App\Http\Controllers\OrderController');

//Test for the route of the view order







