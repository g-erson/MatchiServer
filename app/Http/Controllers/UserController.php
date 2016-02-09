<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function createUser(Request $request)
    {
        $user = new User;
        $user->firstname = $request->json('firstname');
        $user->lastname = $request->json('lastname');         
        $user->email = $request->json('email');
        $api_token = md5(random_bytes(16));
        for($i = 0;$i < 7;$i++)
            $api_token .= md5(random_bytes(16));
        $user->api_token = $api_token;
        if( $user->firstname === null || $user->lastname === null)
            return "<strong>Error, no firstname or lastname supplied</strong>";
        $user->save();

        return $api_token; 
    }

    public function getUser(Request $request, $userid)
    {
        if(Gate::allows('getUser',$userid))
            return User::find($userid);
        else
            return response("Unauthorised. ", 401);
    }

    public function deleteUser(Request $request, $userid)
    {
        if(Gate::allows('deleteUser',$userid)){
            User::destroy($userid);
            return response(200);
        }
        else
            return response("Unauthorised.", 401);
    }
}
