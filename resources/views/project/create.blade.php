@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Nuovo progetto') }}
    </h2>
    <form action="{{ route('project.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome progetto</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description">
          </div>

          <div class="mb-3">
            <label for="technologies" class="form-label">Tecnologies usate</label>
            <input type="text" class="form-control" id="technologies" name="technologies">
          </div>

          <button type="submit" class="btn btn-primary">Invio</button>
    </form>
</div>
@endsection