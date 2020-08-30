@section('title', 'Actualizar Proyecto')
@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                @include('partials.validation-errors')

                <form action="{{  route('projects.update', $project)  }}" method="post">

                    @method('PATCH')

                    @include('projects._form', ['btnText' =>'Actualizar'])

                </form>
            </div>
        </div>
    </div>


@endsection
