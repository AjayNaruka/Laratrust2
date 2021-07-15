@extends('layouts.app')

@section('content')
<div class="container">
    <div class="update-form">
      <form action="{{route('updateProfile')}}" method="POST" enctype="multipart/form-data">
        @php
            echo Auth::user()->id
        @endphp
        @csrf
        @method('POST')
        <div class="my-2">
          <label for="surname">Cognome</label>
          <input id="surname" class="form-control" type="text" placeholder="Inserisci cognome" name="surname" title="surname">
        </div>
        <div class="my-2">
          <label for="user_id">ID</label>
          <input id="user_id" class="form-control" type="text" placeholder="Inserisci cognome" name="user_id" title="user_id" value="{{Auth::user()->id}}" readonly>
        </div>



        <div class="my-2">
          <label  for="address">Indirizzo(Via e N)</label>
          <input id="address" class="form-control" type="text" placeholder="Inserisci indirizzo" name="address" title="address">
        </div>

        <div class="my-2">
          <label for="date_of_birth">Data di Nascita</label>
          <input id="date_of_birth" class="form-control" type="date" placeholder="Inserisci indirizzo" name="date_of_birth" title="date_of_birth">
        </div>

        <div class="my-2">
          <label for="CF">Codice Fiscale</label>
          <input id="CF" class="form-control" type="text" placeholder="Inserisci indirizzo" name="CF" title="CF">
        </div>

        <div class="my-2">
          <label for="city">Città</label>
          <input id="city" class="form-control" type="text" placeholder="Città" name="city" title="city">
        </div>

        <div class="my-2">
          <label for="phone_number">Telefono</label>
          <input id="phone_number" class="form-control" type="text" placeholder="Inserisci Numero Tel" name="phone_number" title="phone_number">
        </div>

        <div class="my-2">
          <label for="img_url">Immagine profilo</label><br>
          <input type="file" id="img_url" name="img_url">
        </div>

        <div class="my-2">
          <label for="cv_url">CV</label><br>
          <input type="file" id="cv_url" name="cv_url">
        </div>

        <button class="btn btn-primary" type="submit">Update</button>
      </form>
    </div>
</div>
@endsection