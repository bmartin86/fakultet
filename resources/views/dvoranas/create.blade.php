@extends('layouts.app')
@section('title', 'Dodaj novu dvoranu')
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

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<h3>Dodaj novu dvoranu:</h3>


<form method="POST" action="/dvoranas" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="naziv"> Naziv dvorane:</label>
        <br>
        <input maxlength="5" type="text" name="naziv" required="true"
               value=""><br>
        <label for="kapacitet"> Broj mjesta:</label
        ><br>
        <input maxlength="6" type="number" min=0 name="kapacitet" required="false"
               value="">
        <br>
    </div>
    <div class="form-group">
        <input type="submit" name="dvorana_sbm" value="Unos">
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