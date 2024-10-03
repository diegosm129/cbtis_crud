@extends('layout.app')

@section('title','Agregar Guantes')

@section('content')

<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1> Creando guantes </h1>
    <form action="{{ route('box.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="description" class="form-label">Descripcion</label>
            <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion"></textarea>
        </div>
        <div class="mb-3">
            <label for="peso" class="form-label">Peso</label>
            <input class="form-control" id="peso" name="peso" placeholder="peso" ></input>
        </div>
        <div class="mb-3">
            <label for="marca" class="form-label">marca</label>
            <textarea class="form-control" id="marca" name="marca" placeholder="marca" ></textarea>
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">color</label>
            <input class="form-control" id="color"  name="color" placeholder="color"  ></input>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">precio</label>
            <input class="form-control" id="precio" name="precio" placeholder="precio"  ></input>
        </div>
        <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i>Agregar</button>
        <a href= "{{ route('box.index')}}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i>Regresar</a>
    </form>

</div>

@endsection
