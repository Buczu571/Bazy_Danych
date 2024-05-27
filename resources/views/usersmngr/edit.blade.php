@extends('usersmngr.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edytuj</div>
  <div class="card-body">
       
      <form action="{{ url('usersmngr/' .$users->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
        <label>Imię:</label><br>
        <input type="text" name="name" id="name" value="{{$users->name}}" class="form-control"><br>
        <label>Adres e-mail:</label><br>
        <input type="text" name="email" id="email" value="{{$users->email}}" class="form-control"><br>
        <label>Hasło:</label><br>
        <input type="text" name="password" id="password" value="{{$users->password}}" class="form-control"><br>
        <label>Typ użytkownika:</label><br>
        <select name="usertype" id="usertype" class="form-control">
            <option value="user" {{ $users->usertype === 'user' ? 'selected' : '' }}>Zwykły użytkownik</option>
            <option value="admin" {{ $users->usertype === 'admin' ? 'selected' : '' }}>Administrator</option>
        </select><br>
        <input type="submit" value="Zapisz" class="btn btn-success"><br>
    </form>
    
  </div>
</div>
  
@stop
