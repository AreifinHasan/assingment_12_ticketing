@foreach ($users as $user)
    <p>{{ $user->name }} - {{ $user->email }} - {{ $user->phone }}</p>
@endforeach
