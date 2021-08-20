<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UserProfile;
use App\CompanyProfile;
use App\User;

class UserProfileController extends Controller
{
    //

    public function update_bank_details(Request $request)
    {
        # code...

        $user_id = Auth::user()->id;

        try {
            //code...
            $data = [
                "type" => "nuban",
                "name" => $request->account_name,
                "description" => "Arkflix Affiliate",
                "account_number" => $request->account_number,
                
                "bank_code" => $request->bank_code,
                "currency" => "NGN"
            ];
    
            $createRecipient = Paystack::createRecipient($data);

           


            $bank_details = UserProfile::create([
                'user_id' => $user_id,
                'account_name' => $request->account_name,
                'account_number' => $request->account_number,
                'bank_code' => $request->bank_code,
            ]);

            // dd($bank_details);

            return back()->with('update_bank_details_msg', 'Bank details registered');

        } catch (\Throwable $th) {
            //throw $th;

            return back()->with('update_bank_details_msg', 'Could  not register bank details');
        }


    }

    public function update_email(Request $request)
    {
        # code...

        $email = User::create($request->all());

        dd($email);


    }

    public function profile_incomplete()
    {
        
        
        return view('profile_incomplete');
    }

    public function update_profile(Request $request)
    {
        # code...

        $request->validate([
            // 'name' => 'required',
            'avatar' => 'required',
            'utility_bill' => 'required',
            'managing_director_name' => 'required',
            'business_name' => 'required',
            'cac_no' => 'required',
            'business_address' => 'required',
            'business_website' => 'required|url',
            'business_email' => 'required|email',
            'contact_person' => 'required',
           
            // 'amount' => 'required|numeric|min:99700|between:0,99.99',
            // 'number_of_accounts' => 'required|numeric|min:1|max:15',
            // 'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);

        $avatar = $request->file('avatar');

        $utility_bill = $request->file('utility_bill');

        $new_avatar = rand().".".$avatar->getClientOriginalExtension();

        $new_utility_bill = rand().".".$utility_bill->getClientOriginalExtension();

        $file1 = $avatar->move(public_path('avatars'), $new_avatar);

        $file2 = $utility_bill->move(public_path('company_uploads'), $new_utility_bill);


        $user_id = Auth::user()->id;

        $avatar = User::find($user_id)->update([
            'avatar' => $new_avatar
        ]);



        $profile = UserProfile::updateOrCreate([
            'user_id' =>$user_id
        ],[
            'user_id' => $user_id,
            'managing_director_name' => $request->managing_director_name,
            'business_name' => $request->business_name,
            'cac_no' => $request->cac_no,
            'business_address' => $request->business_address,
            'business_website' => $request->business_website,
            'business_email' => $request->business_email,
            'contact_person' => $request->contact_person,
            'submitted' => 1
        ]);

        $company_profile = CompanyProfile::updateOrCreate([
            'user_profile_id' => $profile->id
        ],[
            'user_profile_id' => $profile->id,
            'doc_path' => $new_utility_bill
        ]);







        return back()->with('update_profile_msg', 'Profile Update successful!!');


    }

    public function edit_profile()
    {
        # code...

        $profile = UserProfile::where('user_id', Auth::user()->id)->update([
            'submitted' => 0 
        ]);

        return back();
    }

    public function admin_verify(Request $request)
    {
        # code...

        $user_profile = UserProfile::find($request->user_profile_id)->update([
            'admin_verified' => 1
        ]);

        return back()->with('admin_verify_msg', 'Profile Verified');
    }

    public function disapprove_profile(Request $request)
    {
        # code...

        $user_profile = UserProfile::find($request->user_profile_id)->update([
            'admin_verified' => 0,
            'submitted' => 0
        ]);

        return back()->with('admin_verify_msg', 'Profile Disapproved');
    }

    
}
