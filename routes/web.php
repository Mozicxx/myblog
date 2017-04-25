<?php


Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', function () {
	return view('index');
})->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');
Route::get('/posts', 'PostsController@index');
Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/home', 'HomeController@index');
