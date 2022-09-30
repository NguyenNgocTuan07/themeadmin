<?php
Route::group(['namespace' => 'Tuannguyen\Demo\Http\Controllers'], function () {
    Route::get('/demo', 'DemoController@getIndex');
});
