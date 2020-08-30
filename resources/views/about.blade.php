@section('title', 'about')
@extends('layout')

@section('content')

    <h1>{{ __('About')}}</h1>
    Bienvenido {{ $nombre ?? "Invitado" }}

@endsection
