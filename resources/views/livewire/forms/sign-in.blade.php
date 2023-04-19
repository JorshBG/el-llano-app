    <main>

        <!-- Section -->
        <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center form-bg-image"
                    data-background-lg="{{ asset('img/illustrations/signin.svg') }}">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Inicio de sesión</h1>
                            </div>
                            <form class="mt-4" wire:submit.prevent="save">
                                @csrf
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="email">Correo electrónico</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                                </path>
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z">
                                                </path>
                                            </svg>
                                        </span>
                                        <input type="email" class="form-control" placeholder="ejmplo@dominio.com"
                                            id="email" autofocus required name="email" wire:model.defer="email">
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Contraseña</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <input type="password" placeholder="*******" class="form-control"
                                                id="password" required name="password" wire:model.defer="password">
                                        </div>
                                    </div>
                                </div>
                                @if ($process)
                                    <div class="d-grid justify-content-center w-full">
                                        <div class="spinner-border text-dark" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                @else
                                    <div class="d-grid" id="sign-in_btnLogin">
                                        <button type="submit" class="btn btn-gray-800">
                                            Iniciar sesión
                                        </button>
                                    </div>
                                @endif

                                @switch($valid)

                                    @case(2)
                                        <x-modals.swal type="warning" >
                                            @slot('title')
                                                Lo sentimos
                                            @endslot

                                            Tu correo y/o contraseña son incorrectos
                                        </x-modals.swal>
                                    @break

                                    @case(3)
                                        <x-modals.swal >
                                            @slot('title')
                                                Lo lamentamos profundamente
                                            @endslot

                                            Ha ocurrido un error de comunicación, por favor vuelve a intentar más tarde
                                        </x-modals.swal>
                                    @break

                                    @default
                                    @break
                                @endswitch

                                {{-- <x-modals.test1/> --}}

                            </form>
                            <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="fw-normal">
                                    ¿Aún no te has registrado?
                                    <a href="/signup" class="fw-bold"><b>Crea una cuenta</b></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
