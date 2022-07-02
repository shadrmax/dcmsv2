<?php

namespace App\Http\Controllers;

use App\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{

    public function index(Request $request, UserProfile $usr)
    {

        $user = $usr->where('user_id', $request->id)->get();
        foreach ($user as $value)
        {
            return view('user.index', compact('value'));
        }

    }

    public function edit(Request $request, UserProfile $usr)
    {

        $user = $usr->where('user_id', $request->id)->get();
        foreach ($user as $value)
        {
            return view('user.edit', compact('value'));
        }

    }

    public function update(Request $request, UserProfile $usr)
    {
        $q = $usr->find('user_id', $request->input('user_id'));
        $q->name = $request->input('name');
        $q->save();
    }

}
