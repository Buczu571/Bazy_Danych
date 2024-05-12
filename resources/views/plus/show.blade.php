@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Szczegóły plusa</h1>

        <p><strong>ID:</strong> {{ $plus->id }}</p>
        <p><strong>Nazwa:</strong> {{ $plus->name }}</p>
        <p><strong>Typ:</strong> {{ $plus->type }}</p>
        <p><strong>Number:</strong> {{ $plus->number }}</p>
        <p><strong>Producent:</strong> {{ $plus->producent }}</p>
    </div>
@endsection
