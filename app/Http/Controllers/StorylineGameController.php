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
}