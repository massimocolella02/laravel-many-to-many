@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __($project['name']) }}
    </h2>
    <div class="text-center">
        <h3>{{$project['name']}}</h3>
        <p>{{$project['description']}}</p>
        <p>Tecnologie usate: {{$project['technologies']}}</p>
    </div>
</div>
@endsection