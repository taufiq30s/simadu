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

// Authentication Routes...
Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
  ]);
  Route::post('login', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
  ]);
  Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
  ]);


//  Start Middleware Route Login and access page
    Route::group(['middleware' => 'App\Http\Middleware\Admin'], function()
    {
        Route::match(['get', 'post'], '/admin', 'HomeController@admin');
        
        // Start User Feature Route
        Route::get('/admin/users', 'UsersController@index');
        Route::get('/admin/new-user', 'UsersController@create');
        Route::post('/admin/users', 'UsersController@register');
        Route::get('/admin/edit-user/{username}', 'UsersController@editByAdmin');
        Route::put('/admin/user/{username}', 'UsersController@updateByAdmin');
        Route::delete('/admin/user/{username}', 'UsersController@destroy');
        // End User Feature Route

        
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


// Admin Route Page
    // Route::get('/admin/users', 'UsersController@index');
    // Route::get('/admin/new-user', 'UsersController@create');
    // Route::post('/admin/user', 'UsersController@store');
    // Route::get('/admin/edit-user', 'UsersController@edit');
    // Route::put('/admin/edit-user', 'UsersController@update');
    // Route::delete('/admin/delete-user', 'UsersController@destroy');
// End Admin Route Page

// ###     Old Route     ###
//Route::get('/home', 'HomeController@root')->name('home');
// Route::get('/admin', 'HomeController@admin') -> middleware('admin');
// Route::get('/dokter', 'HomeController@dokter') -> middleware('dokter');
// ###   End Old Route   ###
