<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    public function getHomePageLayout()
    {
        return view('layouts.homepage_layout');
    }

    public function customRegister(Request $request)
    {
        $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|min:6|max:255|confirmed',
            'password_confirmation' => 'required|min:6|max:255',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("login")->withSuccess('Your account has been created. Please login.');
    }

    public function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

}
