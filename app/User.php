<?php

namespace App;

use App\Matched_user;
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
        'facebookid',
        'email',
        'updated_at',
        'created_at'
    ];

    /*
     * one to one relationship between user and token key
     */
    public function token()
    {
        return $this->hasOne('App\Token');
    }

    /*
     * one to many relationship between user and matched_users
     */
    public function matched_users()
    {
        return $this->hasMany('App\Matched_user');
    }

    /*
     * one to many relationship between user and blocked_users
     */
    public function blocked_users()
    {
        return $this->hasMany('App\Blocked_user');
    }

    /*
     * one to many relationship between user and user_locations
     */
    public function user_locations()
    {
        return $this->hasMany('App\User_location');
    }

    /*
     * returns matches
     */
    public function matches()
    {
        return Matched_user::where('user_id',$this->id)
                            ->join('users','users.id','=','matched_users.matched_userid')
                            ->orderBy('rank','desc')
                            ->get();
    }

    /*
     * matches a user with another user
     */
    public function match_with($user, $rank)
    {
        $arr = $this->matches()->toArray();
        $match_exists = false;
        foreach($arr as $matched_user)
        {
            if($matched_user['matched_userid'] == $user->id)
            {
                $match_exists = true;
                break;
            }
        }

        if(!$match_exists)
        {
            $match = new Matched_user();
            $match->user_id = $this->id;
            $match->matched_userid = $user->id;
            $match->rank = $rank;
            $match->save();
        }
    }
}
