@section('title', 'home')
@extends('layout')

@section('content')

    <h1>Home</h1>
    Bienvenido {{ $nombre ?? "Invitado" }}

@endsection
