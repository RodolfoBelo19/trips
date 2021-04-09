<?php

namespace App\Http\Controllers;

use App\Models\trip;
use Illuminate\Http\Request;

class tripsController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    
    public function trips()
    {
        $trips = trip::orderby('id', 'desc') -> paginate();
        return view('trips.trips', ['trips' => $trips]);
    }

    public function create()
    {
        return view('trips.createTrips');
    }

    public function insert(Request $request)
    {
        $trip = new trip();
        $trip->name = $request->name;
        $trip->origin = $request->origin;
        $trip->destiny = $request->destiny;
        $trip->cost = $request->cost;
        $trip->save();
        return redirect()->route('trips');
    }

    public function edit(trip $trip)
    {
        return view('trips.editTrips', ['trip' => $trip]);
    }

    public function editTrip(Request $request, trip $trip)
    {
        $trip->name = $request->name;
        $trip->origin = $request->origin;
        $trip->destiny = $request->destiny;
        $trip->cost = $request->cost;
        $trip->save();
        return redirect()->route('trips');
    }

    public function show($id)
    {
        $trip = trip::find($id);
        return view('trips.showTrips', ['trips' => $trip]);
    }

  

}
