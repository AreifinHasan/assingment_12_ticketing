@foreach ($trips as $trip)
    <p>Trip ID: {{ $trip->id }}</p>
    <p>Departure Date: {{ $trip->departure_date }}</p>
    <p>Arrival Date: {{ $trip->arrival_date }}</p>
    <!-- Show other trip details -->
    <a href="{{ route('trips.show', $trip->id) }}">View Details</a>
    <hr>
@endforeach
