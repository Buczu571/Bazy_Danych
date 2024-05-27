@extends('tickets.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Szczegóły biletu</div>
  <div class="card-body">
    <div class="card-body">
    <h5 class="card-title">Rodzaj pociągu: {{ $tickets->train_type }}</h5>
      <p class="card-text">Przystanek początkowy: {{ $tickets->departure_station }}</p>
      <p class="card-text">Przystanek docelowy: {{ $tickets->arrival_station }}</p>
      <p class="card-text">Data i godzina odjazdu: {{ $tickets->departure_time }}</p>
      <p class="card-text">Ilość biletów: {{ $tickets->ticket_quantity }}</p>
      <p class="card-text">Cena: {{ $tickets->price }}</p>
    </div>
  </div>
</div>

@endsection
