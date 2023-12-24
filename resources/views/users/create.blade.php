<form method="POST" action="{{ route('users.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Enter name" required><br><br>
    <input type="email" name="email" placeholder="Enter email" required><br><br>
    <input type="text" name="phone" placeholder="Enter phone" required><br><br>
    <button type="submit">Create User</button>
</form>
