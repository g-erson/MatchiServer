<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\User_location;
use App\User;

class MatchController extends BaseController
{
    public function __construct()
    {
    }

    public function updateLocation(Request $request, $userid)
    {
        $location = new User_location();
        $location->location = $request->json('location');
        if($userid === null)
            return " Error, no user ID supplied";
        $user = User::find($userid);
        $user->user_locations()->save($location);

        return response("Location saved",200);
    }

    public function getMatches(Request $request, $userid)
    {
        return "Here are some matches ".$request->input('userid')."<br>
                John,<br>
                Jacob,<br>
                Toby,<br>
                Sam";
    }
}
