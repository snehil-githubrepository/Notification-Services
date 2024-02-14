<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\OrderShipped;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::get();

        foreach ($users as $user) {
            Notification::send($user, new OrderShipped);
        }
        

        dd('done');
    }
}
