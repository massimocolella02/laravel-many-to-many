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
            <label for="Select" class="form-label">Scegli una categoria</label>
            <select id="Select" class="form-select" name="type_id">
              <option>----Scegli un'opzione----</option>
              @foreach ($types as $elem)
              <option value="{{$elem['id']}}">{{$elem['tipologia']}}</option>
              @endforeach
            </select>
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