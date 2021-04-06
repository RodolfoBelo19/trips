<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tripsController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    
    public function trips()
    {
        return view('trips.trips');
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
