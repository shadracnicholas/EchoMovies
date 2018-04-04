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

Route::get('/', [
	'uses'	=>	'HomeController@index',
	'as'		=>	'home'
]);

/**
*	@param: name => Get Movie Name
* 	Show Movie Information
*/
Route::get('movie/{movie}/{name}', [
	'uses'	=>	'HomeController@movieDetails',
	'as'		=>	'movie_details'
]);

Route::get('book/{movie}/{schedule}/', [
	'uses'	=>	'BookTicketController@index',
	'as'		=>	'bookview'
]);

Route::post('book_ticket', [
	'uses'	=>	'BookTicketController@store',
	'as'		=>	'bookTicket'
]);
