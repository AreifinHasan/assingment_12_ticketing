<form method="POST" action="{{ route('seat_allocations.update', $seatAllocation->id) }}">
    @csrf
    @method('PUT')
    <input type="number" name="trip_id" value="{{ $seatAllocation->trip_id }}" required><br><br>
    <input type="number" name="user_id" value="{{ $seatAllocation->user_id }}" required><br><br>
    <input type="number" name="seat_number" value="{{ $seatAllocation->seat_number }}" required><br><br>
    <!-- Other seat allocation fields -->
    <button type="submit">Update Seat Allocation</button>
</form>
