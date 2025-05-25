<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login.login');
    }

    public function showRegisterForm()
    {
        return view('auth.signup.register');
    }

    public function viewProfile($userID)
    {
        $user = User::find($userID);

        return view('user.profile', ['user' => $user]);
    }


    public function showEmailSignUp()
    {
        return view('auth.signup.email');
    }

    public function showEmailLogin()
    {
        return view('auth.login.email');
    }
    
    public function loginWithEmail(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.email' => 'Invalid email address.'
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'Email not found.',
            ])->withInput();
        }

        if (Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'Incorrect password.',
        ])->withInput();
    }

    public function signupWitEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8'
        ], [
            'password.min' => 'Password must be at least 8 characters.'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);
        return back()->with(['success' => 'Registered succesfuly!']);
    }
}
