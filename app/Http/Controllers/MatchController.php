<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\User_location;
use App\User;
use App\Matched_user;
use App\Blocked_user;

class MatchController extends BaseController
{
    public function __construct()
    {
    }

    /*
     * FUNCTION updateLocation
     * METHOD PUT
     * updates location of user
     *
     * @param request
     * @param userid
     * @return response
     */
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

    /*
     * FUNCTION getMatches
     * METHOD GET
     * returns matches for userid
     *
     * @param request
     * @param userid
     * @return matched users (json)
     */
    public function getMatches(Request $request, $userid)
    {
        $user = User::find($userid);
        return $user->matches();
    }

    /*
     * FUNCTION blockUser
     * METHOD POST
     * blocks a user
     *
     * @param request
     * @param userid
     * @param blockuserid
     * @return response
     */
    public function blockUser(Request $request, $userid, $blockuserid)
    {
        $user = User::find($userid);
        Matched_user::where('user_id',$user->id)
                    ->where('matched_userid',$blockuserid)
                    ->delete();
        $baduser = new Blocked_user();
        $baduser->blocked_userid = $blockuserid;
        $user->blocked_users()->save($baduser);
        return "Blocked succesfully";
    }

    /*
     * FUNCTION unblockUser
     * METHOD DELETE
     * blocks a user
     *
     * @param request
     * @param userid
     * @param unblockuserid
     * @return response
     */
    public function unblockUser(Request $request, $userid, $unblockuserid)
    {
        $user = User::find($userid);
        Blocked_user::where('user_id',$user->id)
                    ->where('blocked_userid',$unblockuserid)
                    ->delete();
        return "Unblocked succesfully";
    }

    /*
     * FUNCTION getBlockedUsers
     * METHOD GET
     * gets bloked users
     *
     * @param request
     * @param userid
     * @return blocked users
     */
    public function getBlockedUsers(Request $request, $userid )
    {
        $user = User::find($userid);
        return $matchedUserIds = Blocked_user::where('user_id',$user->id)
                                        ->join('users','users.id','=','blocked_users.blocked_userid')
                                        ->get();
    }
}
