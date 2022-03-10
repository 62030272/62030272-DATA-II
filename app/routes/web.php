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
route::resource('employee','App\Http\Controllers\EmployeeController');
route::resource('project','App\Http\Controllers\ProjectController');
route::resource('project_status_setup','App\Http\Controllers\Project_status_setupController');
route::resource('project_type_setup','App\Http\Controllers\Project_type_setupController');
route::resource('working','App\Http\Controllers\WorkingController');
route::delete('working.destroy/{proj_id}/{emp_id}','App\Http\Controllers\WorkingController@destroy')->name('working.destroy');
route::get('working.edit/{proj_id}/{emp_id}','App\Http\Controllers\WorkingController@edit')->name('working.edit');

Route::get('/', function () {
    return view('welcome');
});
