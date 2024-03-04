<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Trips;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TripsController extends Controller
{
    public function index()
    {
        $trips = Trips::all();
        return response()->json($trips, 200);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string|max:500',
        ]);
        $user = Auth::user();

        if ($user) {
            $trip = new Trips();
            $trip->title = $request->title;
            $trip->location = $request->location;
            $trip->image = $request->image;
            $trip->description = $request->description;
    
            $user->trips()->save($trip);
    
            return response()->json(['message' => 'Trip created successfully'], 201);
        } else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
}
}