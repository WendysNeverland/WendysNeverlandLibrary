<?php
use Illuminate\Support\Facades\Auth;

    Route::middleware('can:isUser')
        ->prefix('user')
        ->group(function(){
            Route::get('', function () {
                return view('user/LibraryHome');
            });

            Route::get('author', 'AuthorController@index');
            Route::get('author/create', 'AuthorController@create');
            Route::get('author/{author}', 'AuthorController@show');
            Route::post('author', 'AuthorController@store');

            Route::get('book', 'BookController@index');
            Route::get('book/create', 'BookController@create');
            Route::get('book/{book}', 'BookController@show');
            Route::post('book', 'BookController@store');

            Route::get('genre', 'GenreController@index');
            Route::get('genre/create', 'GenreController@create');
            Route::get('genre/{genre}', 'GenreController@show');
            Route::post('genre', 'GenreController@store');

            Route::get('audiobook', 'AudioBookController@index');
            Route::get('audiobook/create', 'AudioBookController@create');
            Route::get('audiobook/{audioBook}', 'AudioBookController@show');
            Route::post('audiobook', 'AudioBookController@store');

            Route::get('narrator', 'NarratorController@index');
            Route::get('narrator/create', 'NarratorController@create');
            Route::get('narrator/{narrator}', 'NarratorController@show');
            Route::post('narrator', 'NarratorController@store');
        }
    );


