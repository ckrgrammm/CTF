<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GameController extends Controller
{
    public function storeName(Request $request)
    {
        // Validate the game name
        $request->validate([
            'game_name' => 'required|max:255', // or any other validation rules
        ]);

        // Store the game name in the session
        Session::put('game_name', $request->input('game_name'));

        // Redirect to the desired page, or return a response
        return redirect()->route('desired.route'); // replace 'desired.route' with your actual route name
    }
}
