@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Czy na pewno chcesz usunąć użytkownika?</h2>
        <p><strong>ID:</strong> {{ $user->id }}</p>
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Usuń</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Anuluj</a>
        </form>
    </div>
@endsection
