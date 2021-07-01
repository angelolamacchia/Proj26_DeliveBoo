<?php

use App\Restaurant;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::prefix('restaurants')

    ->group(function () {

        Route::get('/', 'RestaurantController@index')->name('restaurants.index');
        Route::get('/{id}', 'RestaurantController@show')->name('restaurants.show');

        Route::prefix('/plate')

            ->group(function () {

                Route::get('/{id}', 'PlateController@index')->name('guest.plates.index');
                Route::get('description/{id}', 'PlateController@show')->name('guest.plates.show');
            });
    });

Route::prefix('order')
    ->group(function(){
        Route::get('/', 'OrderController@create')->name('guest.order.create');
        Route::get('/paid', 'RestaurantController@payed')->name('guest.order.paid');
        Route::resource('/checkout', 'OrderController');
    });

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/', 'HomeController@index')->name('guest.home');


//PREFIX DELL'ADMIN
Route::prefix('admin') //ciò che apparirà sulla rotta dell'url
    ->namespace('Admin') //riferimento alla cartella effettiva ovvero Admin
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('admin.home');
        Route::get('/user_restaurant', 'RestaurantController@index')->name('admin.restaurant.index');
        Route::get('/{id}', 'PlateController@show')->name('admin.plates.show');
        Route::get('/{id}/modifica_piatto', 'PlateController@edit')->name('admin.plates.edit');
        Route::resource('/plates', 'PlateController');
        Route::get('/restaurant/{user}/edit', 'RestaurantController@edit')->name('restaurant.edit');
        Route::resource('/restaurant', 'RestaurantController');
    });

//rotta per ordini ristorante
Route::get('/orders_restaurant', 'OrderController@index')->name('admin.orders');
//rotta grafici
Route::get('/orders_chart', 'OrderController@show')->name('admin.chart');

Route::get('/api/deliveboo', 'Api\RestaurantController@index');
Route::get('/payment', 'Api\PaymentController@index')->name('guest.order.payment');
Route::post('/paymentForm', 'Api\PaymentController@generate')->name('payment');