<!-- resources/views/plus/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
       

        <!-- Tabela wyświetlająca listę plusów -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nazwa</th>
                    <th scope="col">Typ</th>
                    <th scope="col">Number</th>
                    <th scope="col">Producent</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pluses as $plus)
                <tr>
                    <th scope="row">{{ $plus->id }}</th>
                    <td>{{ $plus->name }}</td>
                    <td>{{ $plus->type }}</td>
                    <td>{{ $plus->number }}</td>
                    <td>{{ $plus->producent }}</td>
                    <td>
                        <!-- Przykładowe akcje dla plusa -->
                        <a href="{{ route('pluses.show', $plus->id) }}" class="btn btn-primary">Pokaż</a>
                        <a href="{{ route('pluses.edit', $plus->id) }}" class="btn btn-warning">Edytuj</a>
                        <form action="{{ route('pluses.destroy', $plus->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Usuń</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $pluses->links() }}
        <!-- Przycisk do tworzenia nowego plusa -->
        <a href="{{ route('pluses.create') }}" class="btn btn-primary">Dodaj</a>

    </div>
@endsection
