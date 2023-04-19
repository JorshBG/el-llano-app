<main>

    <!-- Section -->
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image"
                data-background-lg="{{ asset('img/illustrations/signin.svg') }}">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3">Crear cuenta </h1>
                        </div>
                        <form wire:submit.prevent="submit" class="mt-4">

                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="email">Nombre(s)</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Juan Perez" id="email"
                                        autofocus required name="name" wire:model.defer="name">
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="email">Apellido(s)</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Juan Perez" id="email"
                                        autofocus name="las_name" wire:model.defer="last_name">
                                </div>
                            </div>

                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="email">Correo</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                            </path>
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                        </svg>
                                    </span>
                                    <input type="email" class="form-control" placeholder="ejemplo@dominio.com"
                                        id="email" autofocus required wire:model.defer="email">
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
                                        <input type="password" placeholder="*******" class="form-control" id="password"
                                            required wire:model.defer="password" name="password">
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <!-- Form -->
                                {{-- <div class="form-group mb-4">
                                    <label for="confirm_password">Confirma tu contraseña</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                                        </span>
                                        <input type="password" placeholder="*********" class="form-control" id="confirm_password" required>
                                    </div>
                                </div> --}}
                                <div class="form-group mb-4">
                                    <label for="password">Rol</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                            </svg>
                                        </span>
                                        <select wire:model.defer="role_id" name="role_id" class="form-select form_input"
                                            aria-label="role">
                                            <option value="-1">Seleccionar</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">
                                                    {{ $role->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="remember">
                                        <label class="form-check-label fw-normal mb-0" for="remember">
                                            Estoy de acuerdo con los <a href="#" class="fw-bold">términos y
                                                condiciones</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">Registrarse</button>
                            </div>
                        </form>

                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <span class="fw-normal">
                                ¿Ya tienes una cuenta?
                                <a href="/signin" class="fw-bold"><b>Inicia sesión aquí</b></a>
                            </span>
                        </div>
                    </div>
                    @switch($code)
                        @case(-1)
                            <x-modals.swal type="warning">
                                @slot('title')
                                    Lo sentimos
                                @endslot

                                El correo ya está registrado
                            </x-modals.swal>
                        @break

                        @case(0)
                            <x-modals.swal type="success" >
                                @slot('title')
                                    ¡Perfecto!
                                @endslot

                                Te has registrado exitosamente, te rediregiremos al inicio de sesión
                            </x-modals.swal>
                        @break

                        @case(1)
                            <x-modals.swal >
                                @slot('title')
                                    Lo lamentamos
                                @endslot

                                Tenemos problemas para procesar tu solicitud
                            </x-modals.swal>
                        @break

                        @default
                        @break
                    @endswitch
                </div>
            </div>
        </div>
    </section>
</main>
