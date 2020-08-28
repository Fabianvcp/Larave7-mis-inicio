@section('title', 'Crear Proyecto')
@extends('layout')

@section('content')

    <h1>Formulario de creación de projecto</h1>

    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

             @endforeach
        </ul>
    @else

    @endif

    <form action="{{  route('projects.store')  }}" method="post">
        @csrf
        <label for="">
            Titulo del proyecto <br>
            <input type="text" name="title">
        </label>
        <br>
        <label for="">
            Descripción del proyecto <br>
            <textarea name="description"></textarea>
        </label>
        <br>
        <button>{{ __('send') }}</button>
    </form>


@endsection
