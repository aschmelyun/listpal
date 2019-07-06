<?php

use Illuminate\Http\Request;

Route::post('{hash}/create', [
    'as'    => 'item.store',
    'uses'  => 'Api\ItemController@store'
]);

Route::post('{hash}/{item}', [
    'as'    => 'item.update',
    'uses'  => 'Api\ItemController@update'
]);

Route::delete('{hash}/{item}', [
    'as'    => 'item.destroy',
    'uses'  => 'Api\ItemController@destroy'
]);