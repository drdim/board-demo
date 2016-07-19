<?php

/** main authority */
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('myProfile', ['middleware' => 'auth', 'uses' => 'ProfileController@showMyProfile']);
Route::get('myProfile/edit', ['middleware' => 'auth', 'uses' => 'ProfileController@updateMyProfile']);

Route::get('myBoard', ['middleware' => 'auth', 'uses' => 'BulletinController@getMyBulletin']);

Route::get('/', ['middleware' => 'auth', 'uses' => 'BulletinController@index']);

// todo group CRUD operations
Route::get('bulletin/{id}', ['middleware' => 'auth', 'uses' => 'BulletinController@view'])->where('id', '[0-9]+');
Route::get('bulletin/{id}/edit', ['middleware' => 'auth', 'uses' => 'BulletinController@edit'])->where('id', '[0-9]+');
Route::get('bulletin/{id}/publish', ['middleware' => 'auth', 'uses' => 'BulletinController@publish'])->where('id', '[0-9]+');
Route::get('bulletin/{id}/close', ['middleware' => 'auth', 'uses' => 'BulletinController@close'])->where('id', '[0-9]+');
Route::get('bulletin/create', ['middleware' => 'auth', 'uses' => 'BulletinController@create']);
Route::post('bulletin/create', ['middleware' => 'auth', 'uses' => 'BulletinController@save']);
Route::post('bulletin/save', ['middleware' => 'auth', 'uses' => 'BulletinController@update']);
// todo temp test uploads
Route::get('upload', function() {
    return View::make('pages.upload');
});
Route::post('apply/upload', ['middleware' => 'auth', 'uses' =>'ImageController@upload']);