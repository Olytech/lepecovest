<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

use App\UserProfile;

class ProfileUpdateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $user_id = Auth::user()->id;

        $profile = UserProfile::where('user_id', $user_id)->first();

        if($profile && $profile->admin_verified == 1){

            

            return $next($request); 

            
            }

            else{

                return redirect()->route('profile_incomplete');
            }
    }
}
