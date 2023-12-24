<!-- Form for editing a location -->
<form method="POST" action="{{ route('locations.update', $location->id) }}">
    <input type="text" name="name" value="{{ $location->name }}" required>
    <button type="submit">Update Location</button>
</form>
