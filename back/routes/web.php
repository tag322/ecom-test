<?php

use Illuminate\Support\Facades\Route;

use App\Models\Order;
use App\Models\TrendingProduct;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';


Route::get('auth/google', 'App\Http\Controllers\ExternalServicesController@redirect');
Route::get('callback/google', 'App\Http\Controllers\ExternalServicesController@callback'); //->middleware('logreq')
Route::post('auth/google/checkuser', 'App\Http\Controllers\ExternalServicesController@checkuser');

Route::get('/test', function () {
        

});