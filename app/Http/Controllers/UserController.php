<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create() {
        return view('users.register');
    }

    public function store(StoreUserRequest $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        auth()->login($user);

        return redirect('/')->with('message', 'Inscription validée !');
    }

    public function login() {
        return view('users.login');
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Vous êtes maintenant déconnecté.');
    }

    public function authenticate(AuthenticateUserRequest $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Vous êtes connecté !');
        }

        return back()->withErrors(['email' => 'Identifiants invalides'])->onlyInput('email');
    }


}
