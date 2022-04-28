<?php

namespace App\Http\Controllers;

//use App\Models\User;
use Illuminate\Http\Request;

class ExpansionsController extends Controller
{
    public function getExpansionsPage()
    {
        return view('layouts.expansions_layout');
    }
}
