<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::get('/', function () {
    return view('welcome');
});


//Test for the route of the menu
Route::get('/menu', function(){
    return view('menuview');
});

//Test for the route of the admin users
//Route::get('/user', 'App\Http\Controllers\AdministrateUserController@index');
Route::resource('/user','App\Http\Controllers\AdministrateUserController');



//Test for the route of the create order
Route::get('/create/order', function(){
    return 'This is the menu for the moment';
});

//Test for the route of the view order
Route::get('/view/order', function(){
    return 'This is the menu for the moment';
});

//Test for the route of the generate PDF
Route::get('/pdf/{idorder}', function($idorder){
    return 'ID is: '.$idorder;
});


//Test for the route of the edit order
Route::get('/edit/order/{idorder?}', function($idorder=1){
    return 'This is the menu for the moment and order: '.$idorder;
});

//Redirect, (para ir alguna ruta especifica así se ingrese en otra)
Route::get('/edit', function(){
    return redirect()->route('user');
});

//validators string int etc  '[0-9]' '[A-Za-z]' .
Route::get('/user/{iduser}', function($iduser){
    return 'The user is: '.$iduser;
})->where('iduser','[0-9]');

//example with conditional
if (view()->exists('admuserview1'))
{
    Route::get('/user', function(){
        return view('admuserview1');
    });
}else{
    return 'The view needed does not exists';
};


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');