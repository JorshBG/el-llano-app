@props(['type' => 'error'])

<div class="swal2-container swal2-center swal2-backdrop-show" style="overflow-y: auto;" id="baseModal">
    <div aria-labelledby="swal2-title" aria-describedby="swal2-html-container" id="bodyModal"
        class="swal2-popup swal2-modal swal2-icon-{{ $type }} swal2-show" tabindex="-1" role="dialog"
        aria-live="assertive" aria-modal="true" style="display: grid;">
        <div class="swal2-icon swal2-{{ $type }} swal2-icon-show" style="display: flex;">
            <div class="swal2-icon-content">
                @switch($type)
                    @case('success')
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                            class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path
                                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                        </svg>
                    @break

                    @case('warning')
                        !
                    @break

                    @default
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                            class="bi bi-bug" viewBox="0 0 16 16">
                            <path
                                d="M4.355.522a.5.5 0 0 1 .623.333l.291.956A4.979 4.979 0 0 1 8 1c1.007 0 1.946.298 2.731.811l.29-.956a.5.5 0 1 1 .957.29l-.41 1.352A4.985 4.985 0 0 1 13 6h.5a.5.5 0 0 0 .5-.5V5a.5.5 0 0 1 1 0v.5A1.5 1.5 0 0 1 13.5 7H13v1h1.5a.5.5 0 0 1 0 1H13v1h.5a1.5 1.5 0 0 1 1.5 1.5v.5a.5.5 0 1 1-1 0v-.5a.5.5 0 0 0-.5-.5H13a5 5 0 0 1-10 0h-.5a.5.5 0 0 0-.5.5v.5a.5.5 0 1 1-1 0v-.5A1.5 1.5 0 0 1 2.5 10H3V9H1.5a.5.5 0 0 1 0-1H3V7h-.5A1.5 1.5 0 0 1 1 5.5V5a.5.5 0 0 1 1 0v.5a.5.5 0 0 0 .5.5H3c0-1.364.547-2.601 1.432-3.503l-.41-1.352a.5.5 0 0 1 .333-.623zM4 7v4a4 4 0 0 0 3.5 3.97V7H4zm4.5 0v7.97A4 4 0 0 0 12 11V7H8.5zM12 6a3.989 3.989 0 0 0-1.334-2.982A3.983 3.983 0 0 0 8 2a3.983 3.983 0 0 0-2.667 1.018A3.989 3.989 0 0 0 4 6h8z" />
                        </svg>
                    @break
                @endswitch
            </div>
        </div>
        <img class="swal2-image" style="display: none;">
        <h2 class="swal2-title" id="swal2-title" style="display: block;">
           {{ $title }}
        </h2>
        <div class="swal2-html-container" id="swal2-html-container" style="display: block;">
            {{ $slot }}
        </div>
        <div class="swal2-actions" style="display: flex;">
            <div class="swal2-loader"></div>
            <button type="button" class="swal2-confirm btn btn-primary" onclick="hide()" style="display: inline-block;" aria-label="">
                OK
            </button>
            {{-- <button type="button" class="swal2-cancel btn btn-gray" style="display: inline-block;" aria-label="">
                Cancel
            </button> --}}
        </div>
    </div>
</div>
