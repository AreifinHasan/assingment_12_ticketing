<form method="POST" action="{{ route('trips.update', $trip->id) }}">
    @csrf
    @method('PUT')
    <input type="date" name="departure_date" value="{{ $trip->departure_date }}" required><br><br>
    <input type="time" name="departure_time" value="{{ $trip->departure_time }}" required><br><br>
    <input type="date" name="arrival_date" value="{{ $trip->arrival_date }}" required><br><br>
    <input type="time" name="arrival_time" value="{{ $trip->arrival_time }}" required><br><br>
    <!-- Other trip fields -->
    <button type="submit">Update Trip</button>
</form>
