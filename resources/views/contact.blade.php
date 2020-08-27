@section('title', 'contact')
@extends('layout')

@section('content')

    <h1>{{ __('Contact')}}</h1>
    Bienvenido {{ $nombre ?? "Invitado" }}<br>

    <form action="{{route('contact')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre ...." value="{{ old('name') }}"><br>
            {!!  $errors->first('name','<small>:message</small>')!!}<br>
        <input type="email" name="email" placeholder="Email .... " value="{{ old('email') }}"><br>
            {!!  $errors->first('email','<small>:message</small>') !!}<br>
   <input type="text" name="subject" placeholder="Asunto ...."><br>
        {!! $errors->first('subject', '<small>:message</small>') !!}<br>
   <textarea name="content" placeholder="Mensaje .... "></textarea><br>
        {!! $errors->first('content', '<small>:message</small>') !!}<br>
   <button>Enviar</button>
</form>

@endsection
