<?php

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


Route::get('/eapihome', [App\Http\Controllers\Eapi\EapiController::class, 'eapihome'])->name('eapihome');

Route::get('/eapishow/{id}', [App\Http\Controllers\Eapi\EapiController::class, 'eapishow'])->name('eapishow');

Route::get('/eapidelete/{id}', [\App\Http\Controllers\Eapi\EapiController::class, 'eapidelete'])->name('eapidelete');

Route::get('/statuschange', [App\Http\Controllers\Eapi\EapiController::class, 'statuschange'])->name('status.change');





Route::get('/mailview', [\App\Http\Controllers\MailController::class, 'view'])->name('mail.view');

Route::post('/sendmail', [\App\Http\Controllers\MailController::class, 'store'])->name('sendmail');

Route::get('/newmail', [\App\Http\Controllers\NewMail\NewMailController::class, 'newmilview'])->name('new.mail');

Route::post('/newmailsend', [\App\Http\Controllers\NewMail\NewMailController::class, 'newmailstore'])->name('newmail.send');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin'],function(){

    Route::group(['middleware'=>'admin.guest'],function(){
        Route::view('loginform','admin.login')->name('admin.loginform');
        Route::post('loginsave','App\Http\Controllers\AdminController@login')->name('admin.login');
    });

    Route::group(['middleware'=>'admin.auth'],function(){
        Route::view('dashboard','admin.home')->name('admin.home');
        Route::post('logout','App\Http\Controllers\AdminController@logout')->name('admin.logout');
    
    });

});
