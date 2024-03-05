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
    
            return response()->json(['message' => 'Viaje se ha creado correctamente'], 201);
        } else {
            return response()->json(['message' => 'No autorizado'], 401);
        }
    
    }       
    public function destroy($id) {
        $trip = Trips::findOrFail($id);
        if(!$trip){
            return  response()->json(['message'=>'Viaje no encontrado'],404);
        }
        $trip->delete();
        
        return response()->json(['message'=>'Se ha eliminado el viaje'],200);
    }

    public function search(Request $request)
    {
        $request-> validate([
            'search' => 'required|string|min:3'
        ]);
        $trips=Trips::where('title', 'like', '%'.$request->input('search').'%' )
                ->orWhere('location', 'like', '%'.$request->input('search').'%' )
                ->orWhere('description', 'like', '%'.$request->input('search').'%' )
                ->get();
        
        if($trips->count()===0){
            return  response()->json(['message'=>'No hay resultados que coincidan con su búsqueda'],404);
        }
        return response()->json($trips);
    }
}