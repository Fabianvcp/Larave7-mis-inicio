@section('title', 'Actualizar Proyecto')
@extends('layout')

@section('content')

    <h1>Formulario de creación de projecto</h1>


    @include('partials.validation-errors')

    <form action="{{  route('projects.update', $project)  }}" method="post">
        @method('PATCH')

        @include('projects._form', ['btnText' =>'Actualizar'])

    </form>


@endsection
