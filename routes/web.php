<?php

// Route::get('/tasks', 'TasksController@index');

// Route::get('/tasks/{task}', 'TasksController@show');


//Posts Controllers

Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts' , 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');



//Tag Conttrollers

Route::get('/posts/tags/{tag}' , 'TagsController@index');



//Comments Controllers

Route::post('posts/{post}/comments', 'CommentsController@store');



//Registration Controllers

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');



//Sessions Controllers

Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('/logout','SessionsController@destroy');

//OwnerStats Controllers

Route::get('/ownerstats', 'OwnerStatsController@index');

//figure out where the end point for uri lands

// Route::get('/ownertats/ajax', array('as' => 'ownerstats.ajax', 'uses' => 'OwnerStatsController@getSeasonStats'));

Route::get('/ownertats/ajax', 'OwnerStatsController@getSeasonStats');