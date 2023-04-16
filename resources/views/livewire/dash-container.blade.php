<div>

    <x-partials.nav-bar />
    <x-partials.side-bar/>

    <main class="content">

        @component($name_component)
        @endcomponent



        {{-- @dump($name_component)
        @dump($checked) --}}

    </main>

</div>
