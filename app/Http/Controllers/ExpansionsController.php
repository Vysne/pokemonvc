<?php

namespace App\Http\Controllers;

//use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExpansionsController extends Controller
{
    public function index()
    {
        return view('layouts.expansions_layout', ['data' => $this->getExpansions()]);
    }

    public function getExpansions()
    {
        $endpoint = 'sets';
         $request = Http::withHeaders([config('auth.pokemon_api_auth.pokemon_api_key') => config('auth.pokemon_api_auth.pokemon_api')])
             ->get(config('auth.pokemon_api_auth.pokemon_url') . $endpoint)
             ->json();

         return $request['data'];
    }

    public function show($set_id)
    {
        $endpoint = 'sets';
        $request = Http::withHeaders([config('auth.pokemon_api_auth.pokemon_api_key') => config('auth.pokemon_api_auth.pokemon_api')])
            ->get(config('auth.pokemon_api_auth.pokemon_url') . $endpoint . '/' . $set_id)
            ->json();

        $selected_expansion_cards = $this->retrieveSelectedExpansionCards($set_id);

        return view('layouts.selected_expansion_layout', ['data' => $request['data'], 'cards' => $selected_expansion_cards]);
    }

    private function retrieveSelectedExpansionCards($set_id)
    {
        $endpoint = 'cards';
        $search_var = '?q=set.id:' . $set_id;

        $request = Http::withHeaders([config('auth.pokemon_api_auth.pokemon_api_key') => config('auth.pokemon_api_auth.pokemon_api')])
            ->get(config('auth.pokemon_api_auth.pokemon_url') . $endpoint . $search_var)
            ->json();

        return $request['data'];
    }
}
