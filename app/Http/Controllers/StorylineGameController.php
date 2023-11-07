<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StorylineGameController extends Controller
{
    public function index()
    {
        // Fetch any dynamic data you need, for example from a database
        // $locations = Location::all();

        // Return the view with the data
        return view('index', [
            // 'locations' => $locations,
        ]);
    }

    public function play()
    {
        // You can fetch data here and pass it to the view if needed
        // For now, we'll just return the 'play' view
        return view('play');
    }
}