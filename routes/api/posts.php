<?php

Route::group(['prefix' => 'posts'], function () {
    Route::get('price-unit', 'Api\PostController@getPriceUnit');
    Route::get('direction', 'Api\PostController@getDirection');
    Route::post('', 'Api\PostController@store');
    Route::get('{id}/change-status', 'Api\PostController@changeStatus')->name('posts.change_status');
    Route::get('{id}/change-approval', 'Api\PostController@changeApproval')->name('posts.change_approval');
});
