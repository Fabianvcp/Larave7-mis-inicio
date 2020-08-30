@section('title', 'Crear Proyecto')
@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                @include('partials.validation-errors')

                <form class="bg-white shadow rounded py-3 px-4" action="{{  route('projects.store')  }}" method="post">
                    <h1 class="display-4">Crear un nuevo proyecto</h1>
                    <hr>

                    @include('projects._form', ['btnText' => 'Guardar'])

                </form>
            </div>
        </div>
    </div>

@endsection
