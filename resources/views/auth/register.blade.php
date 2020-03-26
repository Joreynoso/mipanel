<!DOCTYPE html>
<html lang="en">

<head>

    @include('layout.head')

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">

                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crea una Cuenta!</h1>
                            </div>
                            <form method="POST" action="{{ route('register') }}" class="user">
                                @csrf
                                {{-- nombre --}}
                                <div class="form-group">
                                    <input id="name" type="text"
                                        class="form-control form-control-user @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="ingrese su nombre">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                {{-- email --}}
                                <div class="form-group">
                                    <input id="email" type="email"
                                        class="form-control form-control-user @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="ejemplo@email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                {{-- password --}}
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="password" type="password"
                                            class="form-control form-control-user @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="new-password"
                                            placeholder="contraseña..">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    {{-- repetir password --}}
                                    <div class="col-sm-6">
                                        <input id="password-confirm" type="password"
                                            class="form-control form-control-user""
                                            name=" password_confirmation" required autocomplete="new-password"
                                            placeholder="repetir Contraseña..">
                                    </div>
                                </div>

                                {{-- boton registrar --}}
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Crear Cuenta') }}
                                </button>
                            </form>
                            <hr>

                            {{-- boton login --}}
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Ya tenes una Cuenta? Inicia Sesion!</a>
                            </div>
                        </div>
                        </form>
                        {{-- fin formulario --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.js')
</body>

</html>