<?php

use Illuminate\Support\Facades\Route;

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
    //
    Route::get('/categories/create-categories', 'Web\CategoryController@create_categories')->name('pages.category.create');
    Route::post('/categories/create-categories', 'Web\CategoryController@store_categories')->name('pages.category.store');
    Route::get('/categories/list-categories', 'Web\CategoryController@list_categories')->name('pages.category.list');
    Route::get('/categories/edit-categories/{id}', 'Web\CategoryController@edit_categories')->name('pages.category.edit');
    Route::get('/categories/delete-categories/{id}', 'Web\CategoryController@delete_categories')->name('pages.category.delete');
    Route::post('/categories/edit-categories/{id}', 'Web\CategoryController@update_categories')->name('pages.category.update');
});