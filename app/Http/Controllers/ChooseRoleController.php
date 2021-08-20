<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User;

class ChooseRoleController extends Controller
{
    //

    public function index()
    {

        if(Auth::check()){

            if (Auth::user()->role =='admin') {
                return redirect('/admin');
            }
    
            elseif (Auth::user()->role =='buyer') {
                return redirect('/buyer');
            }
    
            elseif (Auth::user()->role =='partner') {
                return redirect('/partner');
            }
    
    
            else{
                abort(403);
            }

        }else{
                 return redirect('/login');
             }


    }

    public function become_partner(Request $request)
    {
        # code...

        $user_id = Auth::user()->id;

        $role = User::find($user_id)->update([
            'role' => 'partner'
        ]);


        return redirect('/choose');
    }

    public function become_buyer(Request $request)
    {
        # code...

        $user_id = Auth::user()->id;

        $role = User::find($user_id)->update([
            'role' => 'buyer'
        ]);


        return redirect('/choose');
    }
}
