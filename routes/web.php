<?php

//use Symfony\Component\Routing\Annotation\Route;
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

Route::get('/', 'HomeController@root');     // Root, redirect to login page
// Route::auth();   // Uncomment it when Users Table is empty & Comment it when Admin Role is registered

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
// End Authentication Routes...

//  Start Middleware Route Login and access page
    Route::group(['middleware' => 'App\Http\Middleware\Admin'], function()
    {
        Route::match(['get', 'post'], '/admin', 'HomeController@admin');
        
        // Start User Configuration Route
        Route::get('/admin/users', 'UsersController@index');
        Route::get('/admin/new-user', 'UsersController@create');
        Route::post('/admin/users', 'UsersController@register');
        Route::get('/admin/edit-user/{username}', 'UsersController@editByAdmin');
        Route::put('/admin/user/{username}', 'UsersController@updateByAdmin');
        Route::delete('/admin/user/{username}', 'UsersController@destroy');
        // End User Configuration Route

        // Start Room Configuration Route
        Route::get('/admin/ruangan', 'RoomController@index');
        Route::get('/admin/add-ruangan', 'RoomController@create');
        Route::post('/admin/ruangan', 'RoomController@register');
        Route::get('/admin/ruangan/{kdRuangan}/edit', 'RoomController@edit');
        Route::put('/admin/ruangan/{kdRuangan}', 'RoomController@update');
        Route::delete('/admin/ruangan/{kdRuangan}', 'RoomController@destroy');
        // End Room Configuration Route

        // Start Special Admin Program Configuration
        Route::get('/admin/config', 'ConfigController@index');
        Route::post('/admin/config/apply', 'ConfigController@apply');
        // End Special Admin Program Configuration
        
    });

    Route::group(['middleware' => 'App\Http\Middleware\Dokter'], function()
    {
        Route::match(['get', 'post'], '/dokter', 'HomeController@dokter');
    });

    Route::group(['middleware' => 'App\Http\Middleware\RekamMedis'], function()
    {
        Route::match(['get', 'post'], '/rekmed', 'HomeController@rekamMedis');

        // Start Pasien Route From Rekmed
        Route::get('/rekmed/pasien', 'PasienController@showPasienDataByRekmed');
        Route::get('/rekmed/pasien/cekmap', 'PasienController@cekMap');
        Route::get('/rekmed/pasien/cekkk', 'PasienController@cekKK');
        Route::get('/rekemd/pasien/fetch', 'PasienController@fetchTable')->name('pasien.fetch');
        Route::get('/rekmed/pasien/fetch/{cat}', 'PasienController@fetchTable');
        Route::post('/rekmed/pasien', 'PasienController@register');
        Route::get('/rekmed/pasien/{noPasien}/edit', 'PasienController@edit');
        Route::put('/rekmed/pasien/{noPasien}', 'PasienController@update');
        Route::delete('/rekmed/pasien/{noPasien}', 'PasienController@destroy');
        // End Pasien Route From Rekmed
        
        // Start Map Route From Rekmed
        Route::get('/rekmed/map', 'MapController@showMapDatabyRekmed');
        Route::get('/rekemd/map/fetch', 'MapController@fetchTable')->name('map.fetch');
        Route::post('/rekmed/map', 'MapController@register');
        Route::get('/rekmed/map/{noMap}/edit', 'MapController@edit');
        Route::put('/rekmed/map/{noMap}', 'MapController@update');
        Route::delete('/rekmed/map/{noMap}', 'MapController@destroy');
        // End Map Route From Rekemd
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
