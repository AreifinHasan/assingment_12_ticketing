<?php

namespace App\Http\Controllers;

use App\Models\SeatAllocation;
use Illuminate\Http\Request;

class SeatAllocationController extends Controller
{
    public function index()
    {
        $seatAllocations = SeatAllocation::all();
        return view('seat_allocations.index', compact('seatAllocations'));
    }

    public function show(SeatAllocation $seatAllocation)
    {
        return view('seat_allocations.show', compact('seatAllocation'));
    }

    public function edit(SeatAllocation $seatAllocation)
    {
        return view('seat_allocations.edit', compact('seatAllocation'));
    }

    public function update(Request $request, SeatAllocation $seatAllocation)
    {

        $request->validate([
            'trip_id' => 'required|exists:trips,id',
            'user_id' => 'required|exists:users,id',
            'seat_number' => 'required|integer|min:1|max:36',
        ]);

        $seatAllocation->update($request->all());
        return redirect()->route('seat_allocations.index')->with('success', 'Seat allocation updated successfully.');
    }

    public function destroy(SeatAllocation $seatAllocation)
    {
        $seatAllocation->delete();
        return redirect()->route('seat_allocations.index')->with('success', 'Seat allocation deleted successfully.');
    }
}
