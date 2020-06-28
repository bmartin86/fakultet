
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

<h3>Lista svih dvorana:</h3>



<ol> 
    @foreach ($dvorana as $d)


    <li>
        <a href='{{url("/dvoranas/{$d->dvorana_id}")}}'> {{$d->naziv }} {{$d->kapacitet}}</a>
    </li>

    @endforeach
</ol>


@section('js')
<script> console.log('Hi!');</script>
@stop
