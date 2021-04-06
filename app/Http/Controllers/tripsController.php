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
        $trips = trip::paginate();
        return view('trips.trips', ['trips' => $trips]);
    }

    public function create()
    {
        return view('trips.createTrips');
    }

    public function edit()
    {
        return view('trips.editTrips');
    }

    public function show()
    {
        return view('trips.showTrips');
    }
}
