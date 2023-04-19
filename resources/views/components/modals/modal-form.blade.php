@props(['idmodal', 'title', 'route', 'method'])

<div class="modal fade" id="dashboard_modal-{{ $idmodal }}" tabindex="-1" role="dialog" aria-labelledby="dashboard_modal-{{ $idmodal }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card p-3 p-lg-4">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-0 h4">
                            {{ $title }}
                        </h1>
                    </div>
                    <form class="mt-4" id="dashboard-form-modal" action="{{ $route }}" method="{{ Str::upper($method) }}">

                        @csrf

                        {{ $slot }}

                        <div class="d-grid">
                            <button type="submit" class="btn btn-gray-800 mb-3">
                                Guardar
                            </button>
                            <button
                                type="button"
                                class="btn btn-danger"
                                data-bs-toggle="modal"
                                data-bs-target="#dashboard_modal-{{ $idmodal }}"
                                >
                                Cancelar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-4"></div>
