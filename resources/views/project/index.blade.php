@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Progetti') }}
    </h2>
    <div class="row justify-content-center">
        @foreach ($projects as $elem)
        <div class="col-3">
            <a href="{{route('project.show', $elem->id)}}" class="text-decoration-none text-dark">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{$elem['name']}}</h5>
                      <p class="card-text">{{$elem['description']}}</p>
                      <p class="card-text">Tecnologies usate: {{$elem['technologies']}}</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection