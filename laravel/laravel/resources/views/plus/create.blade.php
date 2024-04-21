<!-- resources/views/plus/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dodaj nowy plus</h1>

        <form action="{{ route('pluses.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nazwa:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Typ:</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>

            <div class="mb-3">
                <label for="number" class="form-label">Numer:</label>
                <input type="text" class="form-control" id="number" name="number" required>
            </div>

            <div class="mb-3">
                <label for="producent" class="form-label">Producent:</label>
                <input type="text" class="form-control" id="producent" name="producent" required>
            </div>

            <button type="submit" class="btn btn-primary">Dodaj</button>
        </form>
    </div>
@endsection
