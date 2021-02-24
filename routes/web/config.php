<?php

use Illuminate\Support\Facades\Route;

Route::group(['guard' => 'web',  'prefix' => 'config', 'middleware' => ['auth','permission']], function () {
    Route::get('', 'Web\ConfigController@index')->name('config.index');
    Route::post('', 'Web\ConfigController@updateConfig')->name('config.update');
    Route::get('footer', 'Web\ConfigController@indexConfigFooter')->name('config.footer');
    Route::get('banner', 'Web\ConfigController@configBanner')->name('config.banner');
    Route::get('create-banner', function(){
        return view('default.pages.config.create_banner');
    })->name('config.create.banner');
    Route::post('banner', 'Web\ConfigController@storeBanner')->name('config.banner.store');
    Route::get('delete-banner/{id}', 'Web\ConfigController@deleteBanner')->name('config.banner.delete');
});