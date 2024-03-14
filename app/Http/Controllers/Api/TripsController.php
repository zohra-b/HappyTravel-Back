<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Trips;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TripsController extends Controller
{
    public function index()
    {
        try {
            $trips = Trips::all();
            return response()->json($trips, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al recuperar los viajes.'], 500);
        }
    }

    public function store(Request $request)
    {
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

            $trip->description = $request->description;

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('public/images');
                $trip->image_path = str_replace('public/', 'storage/', $imagePath);
            };
           
            $user->trips()->save($trip);

            return response()->json(['message' => 'Viaje se ha creado correctamente'], 201);
        } else {
            return response()->json(['message' => 'No autorizado'], 401);
        }
    }
    public function destroy($id)
    {
        $trip = Trips::findOrFail($id);

        if ($trip->user_id !== Auth::id()) {
            return response()->json(['message' => 'No autorizado'], 401);
        }

        if (!$trip) {
            return  response()->json(['message' => 'Viaje no encontrado'], 404);
        }
        if ($trip->delete()) {
            return response()->json(['message' => 'Se ha eliminado el viaje'], 200);
        } else {
            return response()->json(['message' => 'Ha ocurrido un error al intentar eliminar el viaje'], 500);
        }
    }

    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required|string|min:3'
        ]);
        $trips = Trips::where('title', 'like', '%' . $request->input('search') . '%')
            ->orWhere('location', 'like', '%' . $request->input('search') . '%')
            ->get();

        if ($trips->count() === 0) {
            return  response()->json(['message' => 'No hay resultados que coincidan con su búsqueda'], 404);
        }
        return response()->json($trips);
    }

    public function getById($id)
    {

        $trip = Trips::find($id);

        if (!$trip) {
            return response()->json(['message' => 'Viaje no encontrado'], 404);
        }

        return response()->json($trip, 200);
    }

    public function getPagination()
    {
        try {
            $trips = Trips::paginate(8);
            return response()->json($trips, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ha ocurrido un error al recuperar los viajes'], 500);
        }
    }


    public function update(Request $request, $id)
    {
        $trip = Trips::findOrFail($id);

        if ($trip->user_id !== Auth::id()) {
            return response()->json(['message' => 'No autorizado'], 401);
        }
        $request->validate([
            'title' => 'string|max:255',
            'location' => 'string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'string|max:500',
        ]);

        $oldImagePath = $trip->image_path;

        $trip->title = $request->title;
        $trip->location = $request->location;
        $trip->description = $request->description;

       
        if ($request->hasFile('image')) {
            if ($oldImagePath && Storage::exists(str_replace('storage/', 'public/', $oldImagePath))) {
                Storage::delete(str_replace('storage/', 'public/', $oldImagePath));

            $imagePath = $request->file('image')->store('public/images');
            $trip->image_path = str_replace('public/', 'storage/', $imagePath);
        };


        $trip->save();

        return response()->json(['message' => 'Viaje actualizado correctamente'], 201);
    }
}}
