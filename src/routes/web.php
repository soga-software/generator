<?php
Route::get('contact', function (){
    return 'contact';
});
Route::group(['namespace' => 'Soga\Generator\Http\Controllers'], function (){
    Route::get('generator', 'GeneratorController@index');
    Route::post('generator','GeneratorController@send')->name('generator');
});
