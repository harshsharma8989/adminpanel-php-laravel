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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' =>['auth','admin']], function () {
    Route::get('/dashboard.html', function () {
        return view('admin.dashboard');
    });

    Route:: get('/user','admin\dashboardcontroller@user');
    Route:: get('/dispute','admin\dashboardcontroller@dispute');
    Route::get('/map','admin\dashboardcontroller@map');
    Route::get('/banner','admin\dashboardcontroller@banner');
    route::get('/documents','admin\dashboardcontroller@documents');
    route::get('/adddocs','admin\dashboardcontroller@adddocs');
    
});
