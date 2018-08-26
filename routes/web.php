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
    return View::make('pages.home');
});

/*
Route::get('signup', function () {
    return View::make('pages.signup');
})->name('signup');
*/

Route::resource('volunteer', 'VolunteerController')->names([
    'create' => 'volunteer.signup'
]);

Route::get('overview', function () {
    return View::make('pages.overview');
})->middleware('auth')->name('overview');

Route::get('volunteerlist', function () {
    return View::make('pages.volunteerlist');
})->middleware('auth')->name('list');

Route::resource('people', 'PersonController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
