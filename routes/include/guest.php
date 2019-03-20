<?php
use Illuminate\Support\Facades\Auth;

    Route::get('author', 'AuthorController@index');
    Route::get('author/{author}', 'AuthorController@show');

    Route::get('book', 'BookController@index');
    Route::get('book/{book}', 'BookController@show');

    Route::get('genre', 'GenreController@index');
    Route::get('genre/{genre}', 'GenreController@show');

    Route::get('audiobook', 'AudioBookController@index');
    Route::get('audiobook/{audioBook}', 'AudioBookController@show');

    Route::get('narrator', 'NarratorController@index');
    Route::get('narrator/{narrator}', 'NarratorController@show');



