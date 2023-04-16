@extends('layouts.error')
@section('body')
    <h1 class="mt-5">Algo a salido <span class="text-primary">bastante</span> mal</h1>
    <p class="lead my-4">
        El servidor se fue a tomar un café, cuando regresé nos podrá seguir ayudando.
    </p>
@endsection
@section('image')
    <div class="col-12 col-lg-7 order-1 order-lg-2 text-center d-flex align-items-center justify-content-center">
        <img class="img-fluid w-75" src="/views/assets/img/illustrations/500.svg" alt="500 Server Error">
    </div>
@endsection
@section('title', 'Error de comunicación')
