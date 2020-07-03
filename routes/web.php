<?php

use App\Http\Controllers\PizzaController; //tambahkan controoller yang diperlukan
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth'); //middleware auth to protect a route with authentification/login
Route::get('/pizzas/create', 'PizzaController@create')->name('pizzas.create'); //this route must located on top of /pizzas/{id}
Route::post('/pizzas', 'PizzaController@store')->name('pizzas-store');
Route::get('/pizzas/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', 'PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');



Auth::routes([
    'register' => false
    //disable register routes
    //ONLY DISABLE REGISTER IF IT IS NEEDED, IT will make register dissapear from navbar
]);


Route::get('/home', 'HomeController@index')->name('home');
