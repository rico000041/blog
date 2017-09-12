<?php



Route::get('/','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::post('/posts', 'PostsController@store');



Route::get('/posts/{post}','PostsController@show');

Route::name("post.comment")->post('/posts/{post}/comments',"CommentsController@store");