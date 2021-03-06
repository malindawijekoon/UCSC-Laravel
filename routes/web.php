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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/fixed-depisit', 'FixedDepositController@index')->name('fixed-depisit');
Route::get('/add-fixed-depisit', 'FixedDepositController@create')->name('add-fixed-depisit');
Route::post('/save-fixed-deposit', 'FixedDepositController@store')->name('saveFixedDeposit');
Route::get('/show-fixed-deposit/{id}', 'FixedDepositController@show')->name('showFixedDeposit');
Route::get('/edit-fixed-deposit/{id}', 'FixedDepositController@edit')->name('editFixedDeposit');
Route::post('/update-fixed-deposit', 'FixedDepositController@update')->name('updateFixedDeposit');
Route::post('/delete-fixed-deposit/', 'FixedDepositController@delete')->name('deleteFixedDeposit');


Route::get('/investment', 'InvestmentController@index')->name('investment');
Route::get('/add-investment', 'InvestmentController@create')->name('add-investment');
Route::post('/save-investment', 'InvestmentController@store')->name('saveInvestment');
