<!DOCTYPE html>
<html lang="en">

<head>

    @include('layout.head')

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        {{-- formulario --}}
                        <form method="POST" action="{{ route('password.email') }}" class="user">
                            @csrf

                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-2">Olvidaste tu Contraseña?</h1>
                                            <p class="mb-4">Lo entendemos, estas cosas pasan!. Ingresa tu direccion de
                                                correo y te enviaremos un enlace para reestablecer tu contraseña!!</p>
                                        </div>
                                        {{-- email --}}
                                        <div class="form-group">
                                            <input id="email" type="email"
                                                class="form-control form-control-user @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                                autofocus placeholder="ingrese su email...">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        {{-- boton reestablecer contraseña --}}
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            {{ __('Enviar Enlace') }}
                                        </button>
                                        <hr>

                                        {{-- boton registrarse --}}
                                        <div class="text-center">
                                            <a class="small" href="{{ route('register') }}">Crear una Cuenta!</a>
                                        </div>

                                        {{-- boton login --}}
                                        <div class="text-center">
                                            <a class="small" href="{{ route('login') }}">Ya tenes una Cuenta? Inicia
                                                Sesion!</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @include('layout.js')

</body>

</html>