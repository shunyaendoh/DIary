<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'DiaryController@index') -> name('diary.index');

Route::get('/diary/create', 'DiaryController@create') ->name('diary.create');

Route::post('/diary/create', 'DiaryController@store') -> name('diary.create');

// Route::get('/diary/{id}/delete', 'DiaryController@destroy') -> name('diary.destroy');
Route::delete('/diary/{id}/delete', 'DiaryController@destroy') -> name('diary.destroy');

Route::get('/diary/{id}/edit', 'DiaryController@edit') -> name('diary.edit');
Route::put('/diary/{id}/update', 'DiaryController@update') -> name('diary.update') ;