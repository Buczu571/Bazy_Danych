@extends('usersmngr.layout')

@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Dodawanie użytkowników</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/admin/usersmngr/create') }}" class="btn btn-success btn-sm" title="Dodaj użytkownika">
                            Dodaj
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Imię</th>
                                        <th>Adres e-mail</th>
                                        <th>Typ użytkownika</th>
                                        <th>Zarządzaj</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->usertype }}</td>
                                            <td>
                                                <a href="{{ url('/admin/usersmngr/' . $item->id) }}" title="Szczegóły">
                                                    <button class="btn btn-info btn-sm">
                                                        <i class="fa fa-eye" aria-hidden="true"></i> Szczegóły
                                                    </button>
                                                </a>
                                                <a href="{{ url('/admin/usersmngr/' . $item->id . '/edit') }}" title="Edycja">
                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edytuj
                                                    </button>
                                                </a>
                                                <form method="POST" action="{{ url('/admin/usersmngr' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Usuń użytkownika" onclick="return confirm('Czy na pewno chcesz usunąć?')">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Usuń
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
