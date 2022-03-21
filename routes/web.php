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

Route::get('/', 'SkillController@index');

Route::group(['prefix' => 'admin'], function(){
    Route::get('skill/create', 'Admin\SkillController@add');
    Route::post('skill/create', 'Admin\SkillController@create');
    Route::get('skill/make', 'Admin\SkillController@make');
    Route::get('skill/movie', 'Admin\SkillController@movie');
});

Route::get('skill/update', 'SkillController@update');
Route::get('skill/check', 'SkillController@check');