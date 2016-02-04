<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Laravel\Lumen\Http\Request;

class MatchController extends BaseController
{
    public function __construct()
    {
    }

    public function updateLocation(Request $request)
    {
        $location = $request->input('location');
        return "Your location is ".$location;
    }

    public function requestMatches(Request $request)
    {
        return "Here are some matches ".$request->input('userid')."<br>
                John,<br>
                Jacob,<br>
                Toby,<br>
                Sam";
    }
}
