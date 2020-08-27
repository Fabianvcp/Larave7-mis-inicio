@section('title', 'about')
@extends('layout')

@section('content')

    <h1>About</h1>
    Bienvenido {{ $nombre ?? "Invitado" }}

@endsection
