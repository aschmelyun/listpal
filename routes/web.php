<?php

Route::view('/', 'home');

Route::get('/new', [
    'as'    => 'checklists.create',
    'uses'  => 'ChecklistController@create'
]);

Route::get('/l/{hash}', [
    'as'    => 'checklists.show',
    'uses'  => 'ChecklistController@show'
]);
