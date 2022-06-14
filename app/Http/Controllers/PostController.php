<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(Request $request)
    {
        $user_profile = UserProfile::where(['username' => $request->route('username')])->get()->first();

        return view('posts.index')->with('profile', $user_profile);
    }


}
