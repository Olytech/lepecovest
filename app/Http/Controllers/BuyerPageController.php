<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Notification;

use App\Listing;

use App\User;

class BuyerPageController extends Controller
{
    //


    public function home()
    {
        # code...

        return view('buyer.home');
    }

    public function profile()
    {
        # code...

        return view('buyer.profile');
    }

    public function notifications()
    {
        # code...

        return view('buyer.notifications');
    }

    public function account()
    {
        # code...

        return view('buyer.account');
    }
}
