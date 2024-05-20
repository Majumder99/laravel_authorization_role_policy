<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\WelcomeNotification;
use App\Notifications\WelcomeSMSNotificaiton;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller {
    public function index() {
        $user = User::first();
        // Notification::send($user, new WelcomeNotification());
        Notification::send($user, new WelcomeSMSNotificaiton());
        return response()->json(['message' => 'Notification sent!']);
    }
}
