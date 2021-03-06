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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function (){
Route::get('/tweets','TweetController@index')->name('home');
Route::post('/profiles/{user}/follow','FollowsController@store')->name('follow');
Route::post('/tweets','TweetController@store');
Route::get('/profiles/{user}','ProfileController@show')->name('profile');
    Route::get('/profiles/{user}/edit','ProfileController@edit')->middleware('can:edit,user');
    Route::patch('/profiles/{user}','ProfileController@update')->middleware('can:edit,user');

});
Route::get('/logout',function (){
   \Session::flush();
});

Route::get('/explore','ExploreController')->name('explore');
Auth::routes();

