<?php
    
Route::group(['guard' => 'web', 'prefix' => 'tin-tuc'], function () {
    Route::get('', 'Web\NewsController@index')->name('news.index');
    Route::group(['middleware' => ['auth']], function () {
        Route::group(['middleware' => ['permission']], function () {
            Route::get('dang-tin', 'Web\NewsController@create')->name('news.create');
            Route::get('{slug}/edit', 'Web\NewsController@edit')->name('news.edit');
            Route::patch('{slug}', 'Web\NewsController@update')->name('news.update');
            Route::post('dang-tin', 'Web\NewsController@store')->name('news.store');
            Route::patch('update-status/{id}', 'Web\NewsController@updateStatus')->name('news.update_status');
        });
    
        Route::delete('{id}', 'Web\NewsController@destroy')->name('news.destroy');
    });

    Route::get('{slug}', 'Web\CategoryController@show')->name('category.show');

    Route::get('{categorySlug}/{slug}', 'Web\NewsController@show')->name('news.show');
});
