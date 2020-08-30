@section('title', 'contacto')
@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                <form class="bg-white shadow rounded py-3 px-4" action="{{ route('contact')}}" method="POST">
                    @csrf
                    <h1 class="display-4">{{ __('Contact')}}</h1>
                    <hr>

                    <div class="form-group">
                        <label for="name" class="label">Nombre</label>
                        <input type="text" id="name" class="form-control @error('name') is-invalid @else border-0 @enderror bg-light shadow" name="name" placeholder="Nombre ...." value="{{ old('name') }}"><br>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="label">E-mail</label>
                        <input type="email" id="email" class="form-control @error('email') is-invalid @else border-0 @enderror bg-light shadow" name="email" placeholder="Email .... " value="{{ old('email') }}"><br>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject" class="label">Asunto</label>
                        <input type="text" id="subject" class="form-control bg-light @error('subject') is-invalid @else border-0 @enderror  shadow" name="subject" placeholder="Asunto ...."><br>
                            @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="content" class="label">content</label>
                       <textarea name="content" id="content" class="form-control bg-light @error('content') is-invalid @else border-0 @enderror  shadow"  placeholder="Mensaje .... "></textarea><br>
                            @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-lg btn-block">Enviar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
