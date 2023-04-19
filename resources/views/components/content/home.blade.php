@props([
    'username' => null
])

<x-partials.menu-bar :username="$username"/>

<div id="mainContent">

    <div class="container-fluid h-fluid">
        <div class="d-grid h-full center-grid">
            <h1 class="display-1">
                <span class="text-dark">¡Bienvenido!</span>
            </h1>
        </div>
    </div>

</div>
