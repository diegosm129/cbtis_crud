@extends('layout.app')

@section('title','Agregar Guantes')

@section('content')

<div class="container">
    <form action="{{ route('box.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="description" class="form-label">Descripcion</label>
            <input class="form-control" id="Descripcion"  placeholder="Descripcion" >
        </div>
        <div class="mb-3">
            <label for="peso" class="form-label">Peso</label>
            <textarea class="form-control" id="peso", placeholder="precio" ></textarea>
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">color</label>
            <textarea class="form-control" id="color"  placeholder="color"  ></textarea>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">precio</label>
            <textarea class="form-control" id="precio" placeholder="precio" ></textarea>
        </div>
        <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i>Agregar</button>
        <a href= "{{ route('box.index')}}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i>Regresar</a>
    </form>

</div>

@endsection
