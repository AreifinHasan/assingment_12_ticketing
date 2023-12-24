<form method="POST" action="{{ route('seat_allocations.store') }}">
    @csrf
    <input type="number" name="trip_id" placeholder="Enter Trip ID" required><br><br>
    <input type="number" name="user_id" placeholder="Enter User ID" required><br><br>
    <input type="number" name="seat_number" placeholder="Enter Seat Number" required><br><br>
    <!-- Other seat allocation fields -->
    <button type="submit">Allocate Seat</button>
</form>
