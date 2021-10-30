<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;
  
// Route::resource('user_profiles', UserProfileController::class);

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('user_profiles/get_region', 'App\Http\Controllers\UserProfileController@get_region');


Route::prefix("user_profiles")->group(function(){
    Route::get('/', 'App\Http\Controllers\UserProfileController@index')->name('user_profiles.index');
    Route::get('create', 'App\Http\Controllers\UserProfileController@create')->name('create');
    Route::post('store', 'App\Http\Controllers\UserProfileController@store')->name('user_profiles.store');
    Route::get('{userProfile}/show', 'App\Http\Controllers\UserProfileController@show')->name('user_profiles.show');
    Route::get('{userProfile}/edit', 'App\Http\Controllers\UserProfileController@edit')->name('user_profiles.edit');
    Route::post('{userProfile}/update', 'App\Http\Controllers\UserProfileController@update')->name('user_profiles.update');
    Route::delete('{userProfile}/delete', 'App\Http\Controllers\UserProfileController@destroy')->name('user_profiles.destroy');
    Route::get('get_region', 'App\Http\Controllers\UserProfileController@get_region')->name('user_profiles.get_region');
});