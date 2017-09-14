<?php



/*$stripe = App::make('App\Billing\Stripe');

dd($stripe);*/
Route::get('/','PostsController@index')->name('home');

Route::get('/posts/create','PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}','PostsController@show');
Route::name("post.comment")->post('/posts/{post}/comments',"CommentsController@store");

Route::get('/posts/tags/{tag}','TagsController@index');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');