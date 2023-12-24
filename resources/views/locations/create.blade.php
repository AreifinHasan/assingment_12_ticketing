<form method="POST" action="{{ route('locations.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Enter location name" required>
    <button type="submit">Create Location</button>
</form>
