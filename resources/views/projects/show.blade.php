@section('title', 'Portafolio |' .$project->title)

@extends('layout')

@section('content')

    <div class="container">

        <h1 class="display-4" >{{ $project->title }}</h1>
        @auth
            <a href="{{ route('projects.edit', $project) }}">Editar proyecto</a>

            <form action="{{  route('projects.destroy', $project)  }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Eliminar</button>

            </form>
        @endauth

        <p>{{ $project->description }}</p>
        <p>{{ $project->created_at->diffForHumans() }}</p>

    </div>
@endsection
