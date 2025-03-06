<?php
namespace App\Http\Controllers;

use App\Events\NotificationEvent;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendNotification()
    {
        // Trigger the event with a message
        event(new NotificationEvent('Hello, this is a real-time notification!'));

        return response()->json(['status' => 'Notification sent!']);
    }
}