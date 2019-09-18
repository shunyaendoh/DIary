<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'DiaryController@index') -> name('diary.index');

Route::get('/diary/create', 'DiaryController@create');

Route::post('/diary/create', 'DiaryController@store') -> name('diary.create');