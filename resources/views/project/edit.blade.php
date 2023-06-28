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

          <div class="mb-3">
            <label for="technologies" class="form-label">Tecnologies usate</label>
            <input type="text" class="form-control" id="technologies" name="technologies" value="{{$project->technologies}}">
          </div>

          <button type="submit" class="btn btn-primary">Invio</button>
    </form>
</div>
@endsection