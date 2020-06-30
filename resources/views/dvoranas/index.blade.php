@extends('layouts.app')
@section('title', 'Sve dvorane')
@section('content_header')
<h1>Dvorane</h1>
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

<!-- Laravel > 7.* -->
@error('success') 
<div class="alert alert-success">{{ $success }}</div>
@enderror

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<br>
<h4>Lista dvorana:</h4>
<hr>

<ol> 
    @foreach ($dvorana as $d)


    <li>
        <a href='{{url("/dvoranas/{$d->dvorana_id}/edit")}}'>
            <i class="fas fa-edit"></i></a>
   
        <form style="display:inline" name="dvorana_delete" action="{{url("/dvoranas/{$d->dvorana_id}")}}" method="POST" enctype="multipart/form-data">
            @method('delete')
            @csrf
            <button type="submit" style="color: blue">
                <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
        </form>  

        <a href='{{url("/dvoranas/{$d->dvorana_id}")}}'> Dvorana:&nbsp;{{$d->naziv }}</a>
    </li>

    @endforeach
</ol>

&nbsp;&nbsp;<a href='{{route('dvoranas.create')}}'>
    <i class="fas fa-plus"></i> Dodaj novu dvoranu</a>
@endsection

@section('css')
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop
