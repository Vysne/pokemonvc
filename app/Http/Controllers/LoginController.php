<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLoginPage()
    {
        return view('layouts.login_layout');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');

//        session()->regenerate();
    }

    public function dashboard()
    {
        if(Auth::check()) {
            return view('layouts.dashboard_layout');
        }

        return redirect("login")->withSuccess('Incorrect login details');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
