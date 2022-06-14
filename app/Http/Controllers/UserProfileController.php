<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserProfileRequest;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    /**
     * Return the view for the user profile.
     */
    public function index()
    {
        $user = User::find(auth()->user()->id);

        $profile = $user->profile()->where('user_id', $user->id)->get();

        if ($profile->isEmpty()) return view('users.profile')->with('message', 'Créez votre profile dès maintenant !');

        return view('users.profile')->with('profile', $profile->first());
    }

    /**
     * Create or update the user profile.
     */
    public function store(UserProfileRequest $request)
    {
        $user = User::find(auth()->user()->id);

        //$profile = $user->profile()->where('user_id', $user->id)->get();

        $profile = UserProfile::updateOrCreate(
            ['user_id' => $user->id],
            ['username' => $request->username, 'bio' => $request->bio]
        );

        return view('users.profile')->with('profile', $profile);
    }
}
