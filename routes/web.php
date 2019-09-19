<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'DiaryController@index') -> name('diary.index');

Route::get('/diary/create', 'DiaryController@create') ->name('diary.create');

Route::post('/diary/create', 'DiaryController@store') -> name('diary.create');

Route::get('/diary/{id}/delete', 'DiaryController@destroy') -> name('diary.destroy');