@extends('layouts.plantilla')

@section('title', 'cursos')

@section('content')
    <h1>Bienvenido a la página cursos</h1>
    <a href="{{route('cursos.create')}}">Crear cursos</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}
@endsection

