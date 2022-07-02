<?php

namespace App\Http\Controllers;

use App\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{

    public function index(Request $request)
    {

        $user = UserProfile::where('user_id', $request->id)->get();
        foreach ($user as $value)
        {
            return view('user.index', compact('value'));
        }

    }

    public function editProfile(Request $request, UserProfile $profile)
    {



    }

}
