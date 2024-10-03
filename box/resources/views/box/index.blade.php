@extends('layout.app')

@section('title','lista de guantes')

@section('content')

<div class="container">
    <h1>Lista de guantes</h1>
 
    <div class="text-end">
        <a href="{{ route('box.create') }}" class="btn btn-primary"><i class="bi bi-plus"></i>create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">color</th>
                <th scope="col">Peso</th>
                <th scope="col">Precio</th>
                <th scope="col">Descripcion</th>
                <th scope="col"></th>  
            </tr>
        </thead>
        <tbody>
            @foreach($guantes as $guante)
            <tr>
                <th scope="row">{{guante->id}}</th>
                <td>{{$guante->color}}</td>
                <td>{{$guante->peso}}</td>
                <td>{{$guante->precio}}</td>
                <td>{{$guante->descripcion}}</td>


                <td>
                    <a href="{{ route('guantes.show', $guante->id) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('guantes.edit', $guante->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{route('guantes.destroy', $guante->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
            </td>
        </tr>
            @endforeach
        
        </tbody>
    </table>


</div>
@endsection
