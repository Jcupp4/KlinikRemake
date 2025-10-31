<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationC extends Controller
{
    public function index(Request $request)
    {
        $notifications = $request->user()->notifications()->latest()->paginate(10);

        return view('notifications.index', compact('notifications'));
    }
}
