@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Progetti') }}
    </h2>
    <div class="row justify-content-center gap-5">
        @foreach ($projects as $elem)
        <div class="col-3">
            <a href="{{route('project.show', $elem->id)}}" class="text-decoration-none text-dark">
                <div class="card">
                    {{-- Info Card --}}
                    <div class="card-body">
                      <h5 class="card-title">{{$elem['name']}}</h5>
                      <p class="card-text">{{$elem['description']}}</p>
                      <p class="card-text">Tecnologies usate: {{$elem['technologies']}}</p>

                      {{-- Bottone modifica --}}
                      <a href="{{ route('project.edit', $elem->id) }}" class="btn btn-success">Modifica</a>

                        {{-- Bottone Delete --}}
                      <form action="{{route('project.destroy', $elem->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Cancella" class="btn btn-danger">
                      </form>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <div class="my-5 d-flex justify-content-center">
        <a href="{{route('project.create')}}" class="btn btn-primary">Crea nuovo progetto</a>
    </div>
</div>
@endsection