<?php

Route::group(['namespace' => 'brifiction\EntwurfhausContact\Http\Controllers', 'middleware' => ['web']], function(){
    Route::get('contact', 'EntwurfhausContactController@index');
    Route::post('contact', 'EntwurfhausContactController@store');
    Route::get('/contact/email/preview', function () {
        return new brifiction\EntwurfhausContact\Mail\MessageSent('Brian Ng', 'admin@entwurfhaus.com', 'Hello World! Please ignore this email, this is only a test.');
    });
});
