<?php

Route::group(['guard' => 'web', 'middleware' => ['auth']], function () {
    Route::get('/categories/list-hinh-thuc', 'Web\CategoryController@getHinhThuc')->name('pages.category.list_hinh_thuc');
    Route::get('/categories/list-loai', 'Web\CategoryController@getLoai')->name('pages.category.list_loai');
    Route::get('/categories/tao-loai', 'Web\CategoryController@createLoai')->name('pages.category.create_loai');
    Route::post('/categories/tao-loai', 'Web\CategoryController@storeLoai')->name('pages.category.store_loai');
});