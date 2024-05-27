@extends('usersmngr.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Użytkownicy</div>
  <div class="card-body">
    <div class="card-body">
      <h5 class="card-title">Imię: {{ $users->name }}</h5>
      <p class="card-text">Adres e-mail: {{ $users->email }}</p>
      <p class="card-text">Typ użytkownika: {{ $users->usertype }}</p>
      <p class="card-text">Status konta: {{ $users->account_status }}</p>
      <p class="card-text">Data utworzenia konta: {{ $users->created_at }}</p>
    </div>
  </div>
</div>

@endsection
