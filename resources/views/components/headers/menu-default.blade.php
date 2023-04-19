@props([
'title',
'subtitle' => null,
'buttontext',
'idmodal' => null,
'route' => '#',
'method' => 'get',
])

@php
    $modal = $idmodal??$title;
@endphp

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <h2 class="h4">
            {{ $title }}
        </h2>
        <p class="mb-0">
            {{ $subtitle }}
        </p>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <button type="button" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center" data-bs-toggle="modal"
            data-bs-target="#dashboard_modal-{{ Str::lower($modal) }}" onclick="getModal('dashboard-form-modal', '{{ $method }}', '{{ $route }}')">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Nuev@ {{ $buttontext }}
        </button>
    </div>

</div>


<x-modals.modal-form idmodal="{{ Str::lower($modal) }}" title="Registrar {{ $buttontext }}" :route="$route" :method="$method">
    {{ $slot }}
</x-modals.modal-form>



