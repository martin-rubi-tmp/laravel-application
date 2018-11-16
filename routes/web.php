<?php

/// Initialize endpoints
use Youbim\Collections\RedBeanCollection;
if( ! RedBeanCollection::is_connected() ) {
    $mysql = config('database.mysql');
    RedBeanCollection::setup_connection( $mysql['connect'], $mysql['user'], $mysql['password'] );
}

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


Route::get('/users', 'Users\ListUsersAction');
Route::post('/users/create', 'Users\CreateUserAction');