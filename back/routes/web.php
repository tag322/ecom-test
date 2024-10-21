<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';


Route::get('auth/google', 'App\Http\Controllers\ExternalServicesController@redirect');
Route::get('callback/google', 'App\Http\Controllers\ExternalServicesController@callback'); //->middleware('logreq')
Route::post('auth/google/checkuser', 'App\Http\Controllers\ExternalServicesController@checkuser');
