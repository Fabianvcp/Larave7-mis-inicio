@section('title', 'portfolio')
@extends('layout')

@section('content')

    <h1>Portfolio</h1>
    Bienvenido {{ $nombre ?? "Invitado" }}

    <ul>

   {{--     @isset($portfolio)
            @else
        @endisset se usa para decir si existe la variable--}}

            @forelse($portfolio as $portfolioItem)

                <li> {{$portfolioItem['title']}}</li>

            @empty

                <li>No hay proyectos para mostrar</li>

            @endforelse


    </ul>

@endsection
