<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Models\User;

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

Route::post('/addusers', function () {
});

Route::get('/users', 'SignupController@index')->name('users');
Route::post('/userlogin', 'SignupController@login')->name('userlogin');
Route::post('/userregister', 'SignupController@store')->name('userregister');


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();

//     

// });

Route::group(['middleware' => 'auth:api'], function () {
    
    Route::post('/details', 'SignupController@show');


    Route::get('/products/{product}', 'ProductController@show')->name('products.show');

    Route::get('/products', 'ProductController@index')->name('products');

    Route::post('/products/store', 'ProductController@store')->name('products.store');

    Route::put('/products/update/{product}', 'ProductController@update')->name('products.update');

    Route::delete('/products/destroy/{product}', 'ProductController@destroy')->name('products.destroy');

    Route::get('/products/usercheck/{product}', 'ProductController@productusercheck')->name('products.usercheck');



    Route::get('/reviews', 'ReviewController@index')->name('reviews');

    Route::get('/reviews/{review}', 'ReviewController@show')->name('reviews.show');

    Route::post('/products/{product}/review', 'ReviewController@store')->name('review.store');

    Route::put('/products/{product}/review/{review}', 'ReviewController@update')->name('review.update');

    Route::delete('/products/{product}/review/{review}/destroy', 'ReviewController@destroy')->name('review.destroy');
});
