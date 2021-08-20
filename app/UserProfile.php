<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //

    protected $guarded = [];

    public function users()
    {
        # code...

        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function company_profiles()
    {
        
        
        return $this->hasMany('App\CompanyProfile', 'user_profile_id', 'id');
    }
}
