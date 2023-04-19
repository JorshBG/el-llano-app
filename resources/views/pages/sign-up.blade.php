@extends('layouts.base')

@section('title', 'Inicio de sesión')

@section('css_files')
    @livewireStyles
@endsection

@section('js_files')
    @livewireScripts
@endsection

@section('content')
    @livewire('forms.sign-up')
@endsection
