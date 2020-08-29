@section('title', 'home')
@extends('layout')

@section('content')

    <h1>{{ __('Home')}}</h1>
    @auth
        {{ auth()->user()->name }}
    @endauth

@endsection
