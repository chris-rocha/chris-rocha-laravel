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

// Route::get('/', function () {
    // try {
    //     DB::connection()->getPdo();
    //     echo "Connected successfully to: " . DB::connection()->getDatabaseName();
    // } catch (\Exception $e) {
    //     die("Could not connect to the database. Please check your configuration. error:" . $e );
    // }
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\Web\SpaController@render')->name('spa');

Route::post('/logout', 'App\Http\Controllers\Web\LogoutController@index')->name('logout');

Route::get('/login', 'App\Http\Controllers\Web\LoginController@index')->name('login');
Route::post('/login', 'App\Http\Controllers\Web\LoginController@signin');

Route::get('/register', 'App\Http\Controllers\Web\RegisterController@index')->name('register');
Route::post('/register', 'App\Http\Controllers\Web\RegisterController@create');


Route::get('/admin', 'App\Http\Controllers\Web\AdminController@index')->name('admin');
Route::post('/admin', 'App\Http\Controllers\Web\AdminController@upload');

// 404 routing bug
Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');
