@extends('layouts.plantilla')
@section('title', 'Cursos')

@section('content')
    <h3 class="text-3xl font-bold underline">Página principal de cursos</h3>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach($cursos as $curso)
            <li>
                <a HREF="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>


    {{$cursos->links()}}
@endsection
