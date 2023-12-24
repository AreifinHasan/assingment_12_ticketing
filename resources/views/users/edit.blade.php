<form method="POST" action="{{ route('users.update', $user->id) }}">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $user->name }}" required><br><br>
    <input type="email" name="email" value="{{ $user->email }}" required><br><br>
    <input type="text" name="phone" value="{{ $user->phone }}" required><br><br>
    <button type="submit">Update User</button>
</form>
