<!-- resources/views/plus/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edycja plusa</h1>

        <form action="{{ route('pluses.update', $plus->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nazwa:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $plus->name }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Typ:</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $plus->type }}">
            </div>

            <div class="mb-3">
                <label for="number" class="form-label">Numer:</label>
                <input type="text" class="form-control" id="number" name="number" value="{{ $plus->number }}">
            </div>

            <div class="mb-3">
                <label for="producent" class="form-label">Producent:</label>
                <input type="text" class="form-control" id="producent" name="producent" value="{{ $plus->producent }}">
            </div>

            <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
        </form>
    </div>
@endsection
