<?php

namespace App\Http\Controllers;
use App\Services\NotificationService;

class UserController extends Controller
{
    public function notify(NotificationService $notification)
    {
        return $notification->send(
            "john@example.com", 
            "Greetings", 
            "We're glad to have you on board!");
    }
}
