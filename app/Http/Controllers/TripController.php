<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        return view('trips.index', compact('trips'));
    }

    public function create()
    {
        // Logic to show the form for creating a new trip
        return view('trips.create');
    }

    public function store(Request $request)
    {
        // Validation logic for the request data
        $request->validate([
            'location_id' => 'required|exists:locations,id',
            'departure_date' => 'required|date',
            'departure_time' => 'required',
            'arrival_date' => 'required|date',
            'arrival_time' => 'required',
        ]);

        // Creating a new trip record
        Trip::create($request->all());
        return redirect()->route('trips.index')->with('success', 'Trip created successfully.');
    }

    public function show(Trip $trip)
    {

        return view('trips.show', compact('trip'));
    }

    public function edit(Trip $trip)
    {
        // Logic to show the edit form for a trip
        return view('trips.edit', compact('trip'));
    }
}
