<?php

namespace App\Http\Controllers\Notifications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
    	// $notifications = $request->user()->notifications;
    	return view('notifications.index');
    }
}
