@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Modifica progetto') }}
    </h2>
    <form action="{{ route('project.update', $project->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nome progetto</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{$project->name}}">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$project->description}}">
          </div>

          @foreach ($tech as $elem)
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="check-{{$elem['id']}}">
            <label class="form-check-label" for="check-{{$elem['id']}}">{{$elem['name_tech']}}</label>
          </div>
          @endforeach

          <button type="submit" class="btn btn-primary">Invio</button>
    </form>
</div>
@endsection