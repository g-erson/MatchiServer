<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\QueryException;

use App\User;
use App\Token;

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
        $token = new Token;
        $errors = null;
        $user->firstname = $request->json('firstname');
        $user->lastname = $request->json('lastname');         
        $user->email = $request->json('email');
        $user->facebookid = $request->json('facebookid');
        if( $user->firstname === null || $user->lastname === null)
            $errors .= " no firstname or lastname supplied \n";
        if( $user->facebookid === null)
            $errors .= " no Facebook ID supplied \n";
        if( $errors === null)
        {
            try {
                $user->save();
            }catch(QueryException $e){
                //TODO check this is the correct error
                return "Error, Facebook ID already in use ";
            }
        }
        else
            return "Error," . $errors;

        $api_token = md5(random_bytes(16));
        for($i = 0;$i < 7;$i++)
            $api_token .= md5(random_bytes(16));
        $token->api_token = $api_token;
        $user->token()->save($token);

        return json_encode(["userid" => $user->id,"AuthToken" => $user->token->api_token]); 
    }

    public function getToken(Request $request, $userid, $userToken, $appToken)
    {
       //query facebook api 
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
