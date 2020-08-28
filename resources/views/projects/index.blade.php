@section('title', 'portfolio')
@extends('layout')

@section('content')

    <h1>Projectos</h1>
    Bienvenido {{ $nombre ?? "Invitado" }}
    <br>
    <a href="{{ route('projects.create') }}">Crear proyecto</a>

    <ul>

        {{--     @isset($portfolio)
                 @else
             @endisset se usa para decir si existe la variable--}}

        @forelse($projects as $project)

            <li><a href="{{ route('projects.show', $project) }}"><strong>{{ $project->title}}</strong></a> <br>
                {{--                    <small>{{ $project->description }}</small> <br>    --}}
                {{--                    {{ $project->created_at->format('d-m-Y') }} <br>   --}}
            </li>
            {{--  tiempo en humano     {{ $project->created_at->diffForHumans() }}  --}}
        @empty

            <li>No hay proyectos para mostrar</li>

        @endforelse

        {{ $projects->links() }}

    </ul>

@endsection
