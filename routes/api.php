<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/tickets/{app}', 'Api\TicketsController@index');

//Route::resource('projects', 'ProjectsController');
//Route::resource('apps', 'AppsController');
//Route::resource('websites', 'WebsitesController');
//Route::resource('project_navigations', 'ProjectNavigationsController');