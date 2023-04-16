<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="@yield('title') page">

    <!-- Favicon -->
    @include('layouts.favicon.default')

    @include('layouts.css.default')

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

    @yield('css_files', '')
</head>

<body>

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

    @yield('content')

    @include('layouts.js.defaults')

    @yield('js_files', '')
</body>

</html>
