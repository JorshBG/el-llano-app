<div>

    <x-partials.nav-bar />
    <x-partials.side-bar/>

    <main class="content" id="main">

        @component($name_component, ['username' => $name, 'data' => $data])@endcomponent

    </main>

</div>
