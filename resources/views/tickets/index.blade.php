@extends('tickets.layout')

@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Dodawanie biletów</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/admin/tickets/create') }}" class="btn btn-success btn-sm" title="Add New Ticket">
                            Dodaj bilet
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Rodzaj Pociągu</th>
                                        <th>Stacja Początkowa</th>
                                        <th>Stacja Docelowa</th>
                                        <th>Szacowany Czas Odjazdu</th>
                                        <th>Cena</th>
                                        <th>Zarządzaj</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tickets as $ticket)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $ticket->train_type }}</td>
                                            <td>{{ $ticket->departure_station }}</td>
                                            <td>{{ $ticket->arrival_station }}</td>
                                            <td>{{ $ticket->departure_time }}</td>
                                            <td>{{ $ticket->price }}</td>
                                            <td>
                                                <a href="{{ url('/admin/tickets/' . $ticket->id) }}" title="View Ticket">
                                                    <button class="btn btn-info btn-sm">
                                                        <i class="fa fa-eye" aria-hidden="true"></i> Szczegóły
                                                    </button>
                                                </a>
                                                <a href="{{ url('/admin/tickets/' . $ticket->id . '/edit') }}" title="Edit Ticket">
                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edytuj
                                                    </button>
                                                </a>
                                                <form method="POST" action="{{ url('/admin/tickets' . '/' . $ticket->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Ticket" onclick="return confirm('Czy chcesz usunąć?')">
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
