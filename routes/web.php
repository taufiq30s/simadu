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

Route::get('/', 'HomeController@root');     // Root, redirect to login page

Auth::routes();

//  Start Middleware Route Login and access page
Route::group(['middleware' => 'App\Http\Middleware\Admin'], function()
{
    Route::match(['get', 'post'], '/admin', 'HomeController@admin');
});

Route::group(['middleware' => 'App\Http\Middleware\Dokter'], function()
{
    Route::match(['get', 'post'], '/dokter', 'HomeController@dokter');
});

Route::group(['middleware' => 'App\Http\Middleware\RekamMedis'], function()
{
    Route::match(['get', 'post'], '/rekmed', 'HomeController@rekamMedis');
});

Route::group(['middleware' => 'App\Http\Middleware\Apoteker'], function()
{
    Route::match(['get', 'post'], '/apotek', 'HomeController@apoteker');
});

//  End Middleware Route Login and access page

// ###     Old Route     ###
//Route::get('/home', 'HomeController@root')->name('home');
// Route::get('/admin', 'HomeController@admin') -> middleware('admin');
// Route::get('/dokter', 'HomeController@dokter') -> middleware('dokter');
// ###   End Old Route   ###
