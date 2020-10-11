<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/', 'GuestController@index') -> name('post.index');
Route::get('/post/show/{id}', 'GuestController@show') -> name('post.show');

Route::get('/post/create', 'LoggedController@create') -> name('post.create');
Route::post('/post/store', 'LoggedController@store') -> name('post.store');

Route::get('/post/edit/{id}', 'LoggedController@edit') -> name('post.edit');
Route::post('/post/update/{id}', 'LoggedController@update') -> name('post.update');

Route::get('/post/del/{id}', 'LoggedController@destroy') -> name('post.destroy');


Route::get('/mailable', function () {
    $user = App\User::inRandomOrder() -> first();
    $post = App\Post::inRandomOrder() -> first();
    $action = "DELETE";

    return new App\Mail\UserAction($user, $post, $action);
});
