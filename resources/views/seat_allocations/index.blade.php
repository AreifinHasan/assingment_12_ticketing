@foreach ($seatAllocations as $seatAllocation)
    <p>Trip ID: {{ $seatAllocation->trip_id }}</p>
    <p>User ID: {{ $seatAllocation->user_id }}</p>
    <p>Seat Number: {{ $seatAllocation->seat_number }}</p>
    <!-- Show other seat allocation details -->
    <a href="{{ route('seat_allocations.show', $seatAllocation->id) }}">View Details</a>
    <hr>
@endforeach
