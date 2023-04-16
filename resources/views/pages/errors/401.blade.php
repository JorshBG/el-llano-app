@extends('layouts.error')

@section('image')
    <img class="img-fluid w-75" src="{{ asset('img/illustrations/401.svg') }}" alt="401 unauthorized">
@endsection

@section('body')
    <h1 class="mt-5">Sin <span class="fw-bolder text-primary">autorización</span></h1>
    <p class="lead my-4">
        Umh, parece que no tienes acceso a este recurso de momento, intenta seguir el protocolo de uso de este software
    </p>
@endsection

@section('title', 'Sin autorización')
