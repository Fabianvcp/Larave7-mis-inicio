@section('title', 'Crear Proyecto')
@extends('layout')

@section('content')

    <h1>Formulario de creación de projecto</h1>


    @include('partials.validation-errors')

    <form action="{{  route('projects.store')  }}" method="post">

        @include('projects._form', ['btnText' => 'Guardar'])

    </form>


@endsection
