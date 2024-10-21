<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Log;

use App\Models\User;

// Broadcast::routes(['middleware' => ['api', 'auth:sanctum']]);

// Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
//     return (int) $user->id === (int) $id;
// });


Broadcast::channel('payments-status-channel', function (User $user) {
    
    return $user->hasRole('admin');

});



Broadcast::channel('orders-channel', function (User $user) {
    
    return $user->hasRole('admin');
    
});