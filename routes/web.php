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

Route::group(['middleware' => ['auth', 'role:admin|student'], 'prefix' => 'admin'], function () {
    Route::get('dashboard', 'AdminController@welcome')->name('dashboard');

    Route::resource('users', 'UsersController');
    Route::get('/users/{id}/destroy', [
        'uses' => 'UsersController@destroy',
        'as'   => 'admin.users.destroy'
    ]);

    Route::resource('students', 'StudentsController');
    Route::get('/students/{id}/destroy', [
        'uses' => 'StudentsController@destroy',
        'as'   => 'admin.students.destroy'
    ]);
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
