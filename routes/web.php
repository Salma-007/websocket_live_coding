<?php

use Illuminate\Support\Facades\Route;
use App\Events\NotificationEvent;

Route::get('/notify', function () {
    $message = "Vous avez une nouvelle notification!";
    event(new NotificationEvent($message));
    return "Notification envoyée!";
});

Route::get('/', function () {
    return view('welcome');
});


