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
Route::get('/expense','ExExpenseController@displayform');
Route::post('/add_data','ExExpenseController@save');


Route::get('/expenseviews','Admin\DashboardController@viewforms');

Route::get('/expenseviews','Admin\DashboardController@index');

Route::get('/click_edit/{id}','Admin\DashboardController@edit_function');

Route::post('/update/{id}','Admin\DashboardController@update_function');

Route::get('/click_delete/{id}','Admin\DashboardController@delete_function');


Route::get('/userexpenseviews','Admin\DashboardController@newviewforms');

Route::get('/userexpenseviews','Admin\DashboardController@newindex');

Route::get('/dash','Admin\DashboardController@newestviewforms');

Route::get('/dash','Admin\DashboardController@newestnewindex');
Route::get('/', function () {
    return view('welcome');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']], function (){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
        
}); 

Route::get('/role-register','Admin\DashboardController@registered');
Route::get('/role-edit/{name}','Admin\DashboardController@registeredit');
Route::put('role-register-update/{id}','Admin\DashboardController@registerupdate');
Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');
Route::get('/expense','Admin\DashboardController@displayform');
Route::post('/add_data','Admin\DashboardController@save');
Route::get('/expense-add','Admin\DashboardController@expenseadd');

});