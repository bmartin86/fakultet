@extends('layouts.app')
@section('title', 'Detalji dvorane')
@section('content_header')
<h1>{{$dvorana->naziv}}</h1>
@stop


@section('content')
@if (Session::has('message'))
<div class="alert alert-success">{{ Session::get('message') }}
</div>
@endif 
<br>
<h4>Detalji dvorane {{$dvorana->naziv}}:</h4>
<hr>

<div class="border border-info rounded-md">
<h5>Kapacitet - {{$dvorana->kapacitet}} mjesta 
</div>

<a href='{{route("dvoranas.index")}}'>
    <i class="fas fa-angle-double-left"></i> Natrag na listu dvorana</a>

@endsection

@section('css')
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop