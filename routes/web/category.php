<?php

Route::group(['guard' => 'web', 'middleware' => ['auth']], function () {
    Route::get('/categories/list-hinh-thuc', 'Web\CategoryController@getHinhThuc')->name('pages.category.list_hinh_thuc');
    Route::get('/categories/list-loai', 'Web\CategoryController@getLoai')->name('pages.category.list_loai');
    //edit
    Route::get('/categories/list-loai/{id}', 'Web\CategoryController@editLoai')->name('pages.category.edit_loai');
    Route::post('/categories/list-loai/{id}', 'Web\CategoryController@updateLoai')->name('pages.category.update_loai');
    //create
    Route::get('/categories/tao-loai', 'Web\CategoryController@createLoai')->name('pages.category.create_loai');
    Route::post('/categories/tao-loai', 'Web\CategoryController@storeLoai')->name('pages.category.store_loai');
    //delete
    Route::get('/categories/delete-loai/{id}', 'Web\CategoryController@deleteLoai')->name('pages.category.delete_loai');
});