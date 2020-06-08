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

Auth::routes();


Route::get('/', ['as' => 'home', function (){
    return view('layouts.home');
}])->middleware(['role']);

Route::group(['middleware' => ['web', 'auth', 'role']], function () {

    Route::get('resumes/download/{userid}', ['as' => 'resumes.download', 'uses' => 'ResumeController@download']);
    Route::get('resumes/admin/all', ['as' => 'resumes.admin.all', 'uses' => 'ResumeController@showAll']);
    //Route::get('resumes/admin/show/{id}', ['as' => 'resumes.admin.show', 'uses' => 'ResumeController@adminShow']);
    Route::delete('resumes/admin/destroy/{id}', ['as' => 'resumes.admin.destroy', 'uses' => 'ResumeController@adminDestroy']);
    Route::get('resumes/admin/restore/{id}', ['as' => 'resumes.admin.restore', 'uses' => 'ResumeController@adminRestore']);

    Route::resource('resumes', 'ResumeController');

});