<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends Model implements
    AuthenticatableContract,
    AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 
        'lastname',
        'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'api_token',
        'facebookid'
    ];

    /*
     * one to one relationship between user and token key
     */

    public function token()
    {
        return $this->hasOne('App\Token','userid','tokenid');
    }

    /*
     * one to many relationship between user and matched_users
     */

    public function matched_users()
    {
        return $this->hasMany('App\Matched_user','userid','matched_userid');
    }

    /*
     * one to many relationship between user and matched_users
     */

    public function user_locations()
    {
        return $this->hasMany('App\User_location','userid','locationid');
    }
}
