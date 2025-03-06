<?php

use Illuminate\Support\Facades\Route;
use App\Events\NotificationEvent;
use App\Http\Controllers\NotificationController;
use App\Events\SimpleNotification;
use Illuminate\Http\Request;
use App\Events\RealTimeNotification;

// Route::get('/send-notification', function (Request $request) {
//     $message = $request->query('message', 'Hello, world!');
//     broadcast(new SimpleNotification($message));
//     return response()->json(['message' => 'Notification envoyée !']);
// });



Route::get('/send-notification', function () {
    $message = "Vous avez une nouvelle notification!";
    event(new NotificationEvent($message));
    return "Notification envoyée!";
});

Route::view('/notifications', 'notifications');

// Route::get('/send-notification', [NotificationController::class, 'sendNotification']);

Route::get('/notify', function () {
    $message = "Vous avez une nouvelle notification!";
    event(new NotificationEvent($message));
    return "Notification envoyée!";
});

Route::get('/', function () {
    return view('welcome');
});


