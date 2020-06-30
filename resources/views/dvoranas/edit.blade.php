@extends('layouts.app')
@section('title', 'Uredi dvoranu ')
@section('content_header')
<h1>Dvorana</h1>
@stop


@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@error('message')
    <div class="alert alert-success">{{ $message }}</div>
@enderror

<h3>Uredi dvoranu:</h3>


<form method="POST" action="/dvoranas/{{$dvorana->dvorana_id}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="dvorana_id"> id:</label><br>
        <input maxlength="3" type="number" name="dvorana_id" required="true" readonly="true"
               value="{{ $dvorana->dvorana_id }}"><br>

        <label for="naziv"> Naziv dvorane:</label>
        <br>
        <input maxlength="5" type="text" name="naziv" required="true"
               value="{{ $dvorana->naziv }}"><br>
        
        <label for="kapacitet"> Broj mjesta:</label>
        <br>
        <input maxlength="4" type="number" name="kapacitet" required="false"
               value="{{ $dvorana->kapacitet }}"><br>
    </div>
    <div class="form-group">
        <input type="submit" name="dvorana_sbm" value="Spremi promjene">
    </div>
</form>

@endsection

@section('css')
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop