@extends('layouts.error')


@section('image')
    <img class="img-fluid w-75" src="{{ asset('img/illustrations/404.svg') }}" alt="404 not found">
@endsection

@section('body')
    <h1 class="mt-5">Página <span class="fw-bolder text-primary">no encontrada</span></h1>
    <p class="lead my-4">
        Ups! Parece que has seguido un enlace no válido, si crees que el problema con la página puedes reportarlo
    </p>
@endsection

@section('title', 'No encontrado')


