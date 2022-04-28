<?php

namespace App\Http\Controllers;

//use App\Models\User;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function getHomePageLayout()
    {
        return view('layouts.homepage_layout');
    }

//    public function store()
//    {
//        $attributes = request()->validate([
//            'firstname' => 'required|max:255',
//            'lastname' => 'required|max:255',
//            'email' => 'required|unique:users|email|max:255',
//            'mobile' => 'required|string',
//            'status_id' => 'required|int',
//            'subscription_id' => 'required|int',
//            'password' => 'required|min:6|max:255|confirmed',
//            'password_confirmation' => 'required|min:6|max:255'
//        ]);
//
//        $user = User::create($attributes);
//
//        Auth()->login($user);
//
//        return redirect('dashboard')->with('success', 'Your account has been created.');
//    }
}
