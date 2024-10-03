@extends('layout.app')

@section('title', 'Ver el guante')

@section('content')

<div class"container">
    <h1>Mostar guantes</h1>
    <div>
        <b>Id:</b> {{$guante ->id}}
    </div>
    <div>
        <b>Descripcion:</b> {{$guante->descripcion}}
    </div>
    <div>
        <b>Color:</b> {{$guante->color}}
    </div>
    <div>
        <b>Peso:</b> {{$guante->peso}}
    </div>
    <div>
        <b>Marca:</b> {{$guante->marca}}
    </div>
    <div>
        <b>precio:</b> {{$guante->precio}}
    </div>
    <a href= "{{ route('box.index')}}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i>Regresar</a>

</div>

@endsection


    
    