<form method="POST" action="{{ route('trips.store') }}">
    @csrf
    <input type="date" name="departure_date" required><br><br>
    <input type="time" name="departure_time" required><br><br>
    <input type="date" name="arrival_date" required><br><br>
    <input type="time" name="arrival_time" required><br><br>
    <!-- Other trip fields -->
    <button type="submit">Create Trip</button>
</form>
