<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_location extends Model
{

    protected $primaryKey = 'userid';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userid'
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'location'
    ];

    /*
     * one to many relationship between user and token key
     */

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
