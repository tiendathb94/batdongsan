<?php

Route::group(['guard' => 'web',  'prefix' => 'config', 'middleware' => ['auth','permission']], function () {
    Route::get('', 'Web\ConfigController@index')->name('config.index');
    Route::post('', 'Web\ConfigController@updateConfig')->name('config.update');
    Route::get('footer', 'Web\ConfigController@indexConfigFooter')->name('config.footer');
    Route::post('footer', 'Web\ConfigController@updateConfigFooter')->name('config.footer.update');
});