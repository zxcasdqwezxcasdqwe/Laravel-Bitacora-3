@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

<a href="{{url('/libros/create')}}">Registrar Nuevo Libro</a>


<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Páginas</th>
        </tr>
    </thead>

    <tbody>
        @foreach($libros as $libro)
        <tr>
            <td>{{$libro->id}}</td>
            <td>{{$libro->Titulo}}</td>
            <td>{{$libro->Autor}}</td>
            <td>{{$libro->Paginas}}</td>
            <td><a href="{{url('/libros/'.$libro->id.'/edit')}}">
                    Editar
                </a>
                 | 
                <form action="{{url('/libros/'.$libro->id)}}" method="post">
                @csrf
                 {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

</div>
@endsection