<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/extranet/general/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/extranet/general/general.css') }}">
    <link rel="stylesheet" href="{{ asset('css/extranet/general/adminlte.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <title>Maya & Moya</title>
</head>

<body
    style="padding: 0; background-size: 100% 100%; background-repeat: no-repeat; background-image: url('{{ asset('imagenes/sistema/fondo_login3.jpg') }}');">
    <div class="row d-flex justify-content-center align-items-center"
        style="min-height: 98vh; width: auto; background-image: linear-gradient(rgba(255, 255, 255, 0.7), rgba(0, 0, 0, 0.7));">
        <div class="col-11 col-md-5">
            <form class="card card-outline card-info"method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card-header text-center">
                    <div class="row">
                        <div
                            class="col-8 col-md-6 text-center text-md-right d-flex justify-content-center align-items-center">
                            <h2 class="mr-5">Acceso al Sistema</h2>
                        </div>
                        <div class="col-4 col-md-6 text-center">
                            <img class="img-fluid rounded-circle ml-5 mini_sombra"
                                src="{{ asset('imagenes/sistema/petu1.png') }}" style="max-width: 100px;height: auto;"
                                alt="User Image">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-9 mb-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fas fa-user-shield"
                                        aria-hidden="true"></i></span>
                                <div class="form-floating">
                                    <input id="email" type="email"
                                        class="form-control form-control-sm @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        autofocus placeholder="Correo Electrónico">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="username">Correo Electrónico</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-9 mb-3">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                <div class="form-floating">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Contraseña">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="password">Contraseña</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-xs">Ingresar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
