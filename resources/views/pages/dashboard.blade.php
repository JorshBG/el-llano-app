@extends('layouts.base')

@section('css_files')
    @livewireStyles
@endsection

@section('js_files')
    @livewireScripts
@endsection

@section('content')
    @livewire('dash-container')
@endsection
