<?php

Route::get('/', function () {
    return 'home';
});

Route::get('/new', [
    'as'    => 'checklists.create',
    'uses'  => 'ChecklistController@create'
]);

Route::get('/l/{hash}', [
    'as'    => 'checklists.show',
    'uses'  => 'ChecklistController@show'
]);
