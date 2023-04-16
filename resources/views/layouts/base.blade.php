<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Dashboard">

    <!-- Favicon -->
    @include('layouts.favicon.default')

    @include('layouts.css.default')

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

    @livewireStyles
</head>

<body>

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

    @livewire('dash-container')

    @include('layouts.js.defaults')

    @livewireScripts
</body>

</html>
