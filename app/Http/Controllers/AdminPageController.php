<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Notification;

use App\Listing;

use App\User;

use App\UserProfile;

class AdminPageController extends Controller
{
    //

    public function home()
    {
        # code...

        return view('admin.home');
    }

    public function members()
    {
        # code...

        $members = User::with('user_profiles')->latest()->where('role', '!=', 'admin')->get();

    

        return view('admin.members',[
            'members' => $members
        ]);
    }

    public function member($user_code)
    {
        # code...
        $user = User::where('user_code', $user_code)->first();

        $member_data = UserProfile::with('users')->with('company_profiles')->where('user_id', $user->id)->first();

        // dd($member_data);

        return view('admin.member',[
            'member' => $member_data
        ]);
    }

    public function listings()
    {
        # code...

        return view('admin.listings');
    }

    public function listing()
    {
        # code...

        return view('admin.listing');
    }

    public function notifications()
    {
        # code...

        return view('admin.notifications');
    }

    public function reviews()
    {
        # code...

        return view('admin.reviews');
    }
}
