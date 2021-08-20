<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Notification;

use App\Listing;

use App\User;

use App\UserProfile;

class InvestorPageController extends Controller
{
    //

    public function home()
    {
        
        
        return view('investor.home');
    }

    public function profile()
    {

        $profile = UserProfile::with('users')->with('company_profiles')->where('user_id', Auth::user()->id)->first();

        // dd($profile);
        
        
        return view('investor.profile',[
            'profile_data' => $profile
        ]);
    }

    public function notifications()
    {
        $user_id = Auth::user()->id;

        $notifications = Notification::where('user_id', $user_id)->latest()->get();
        
        
        return view('investor.notifications',[
            'notifications' => $notifications
        ]);
    }

    public function listings()
    {
        
        
        return view('investor.listings');
    }

    public function listing()
    {
        
        
        return view('investor.listing');
    }

    public function create_listing()
    {
        
        
        return view('investor.create_listing');
    }
}
