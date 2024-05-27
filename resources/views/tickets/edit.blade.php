@extends('tickets.layout')

@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Edycja biletu</div>
  <div class="card-body">
       
      <form action="{{ url('admin/tickets/' . $tickets->id) }}" method="post">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $tickets->id }}">
        
        <label>Rodzaj pociągu:</label><br>
        <select name="train_type" id="train_type" class="form-control">
            <option value="ekspresowy" {{ $tickets->train_type == 'ekspresowy' ? 'selected' : '' }}>Ekspresowy</option>
            <option value="intercity" {{ $tickets->train_type == 'intercity' ? 'selected' : '' }}>InterCity</option>
            <option value="regionalny" {{ $tickets->train_type == 'regionalny' ? 'selected' : '' }}>Regionalny</option>
            <!-- Dodaj inne opcje -->
        </select><br>
        
        <label>Przystanek początkowy:</label><br>
        <select name="departure_station" id="departure_station" class="form-control">
            <option value="krakow" {{ $tickets->departure_station == 'krakow' ? 'selected' : '' }}>Kraków</option>
            <option value="warszawa" {{ $tickets->departure_station == 'warszawa' ? 'selected' : '' }}>Warszawa</option>
            <option value="katowice" {{ $tickets->departure_station == 'katowice' ? 'selected' : '' }}>Katowice</option>
            <option value="poznan" {{ $tickets->departure_station == 'poznan' ? 'selected' : '' }}>Poznań</option>
            <option value="gdansk" {{ $tickets->departure_station == 'gdansk' ? 'selected' : '' }}>Gdańsk</option>
            <!-- Dodaj inne opcje -->
        </select><br>
        
        <label>Przystanek docelowy:</label><br>
        <select name="arrival_station" id="arrival_station" class="form-control">
            <option value="krakow" {{ $tickets->arrival_station == 'krakow' ? 'selected' : '' }}>Kraków</option>
            <option value="warszawa" {{ $tickets->arrival_station == 'warszawa' ? 'selected' : '' }}>Warszawa</option>
            <option value="katowice" {{ $tickets->arrival_station == 'katowice' ? 'selected' : '' }}>Katowice</option>
            <option value="poznan" {{ $tickets->arrival_station == 'poznan' ? 'selected' : '' }}>Poznań</option>
            <option value="gdansk" {{ $tickets->arrival_station == 'gdansk' ? 'selected' : '' }}>Gdańsk</option>
            <!-- Dodaj inne opcje -->
        </select><br>
        
        <label>Data i godzina odjazdu:</label><br>
        <input type="datetime-local" name="departure_time" value="{{ date('Y-m-d\TH:i', strtotime($tickets->departure_time)) }}" class="form-control"><br>
        
        <label>Ilość biletów:</label><br>
        <input type="number" name="ticket_quantity" value="{{ $tickets->ticket_quantity }}" class="form-control" min="1"><br>
        
        <label>Cena:</label><br>
        <input type="text" name="price" value="{{ $tickets->price }}" class="form-control"><br>
        
        <input type="submit" value="Zapisz" class="btn btn-success"><br>
    </form>
    
  </div>
</div>

@stop
