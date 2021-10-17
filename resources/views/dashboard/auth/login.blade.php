<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('vendors/iconic-fonts/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/flat-icons/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/cryptocoins/cryptocoins.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
    <!-- Medboard styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="ms-body ms-primary-theme ms-logged-out">
    <!-- Main Content -->
    <main class="body-content">
        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper ms-auth">
            @if (session()->has('flash'))
            <div class="alert alert-danger" role="alert">
                {{ session('flash') }}
            </div>
            @endif

            <div class="ms-auth-container">
                <div class="col-md-8 offset-md-2">
                    <div class="ms-auth-form">
                        <form class="needs-validation" novalidate="" method="post" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="text-center">
                                <img src="{{ asset('img/descarga.png') }}" class="rounded logo" alt="logo">
                            </div>
                            <style>
                                .logo {
                                    max-width: 60%;
                                    height: auto;
                                }
                            </style>
                            <br>
                            <div class="mb-3">
                                <label for="validationCustom08">Ingrese su nombre de usuario</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom08"
                                        placeholder="nombre de usuario" required name="username" value="{{ old('username') }}">
                                    <div class="invalid-feedback">
                                        Please provide a valid Username.
                                    </div>
                                </div>
                                {!! $errors->first('username','<small  class="form-text text-muted">:message</small >')!!}
                            </div>
                            <div class="mb-2">
                                <label for="validationCustom09">Contraseña</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="validationCustom09"
                                        placeholder="Contraseña" required name="password">
                                    <div class="invalid-feedback">
                                        Please enter a password.
                                    </div>
                                </div>
                                {!! $errors->first('password','<small  class="form-text text-muted">:message</small >')!!}
                            </div>
                            <div class="form-group">
                                <label class="ms-checkbox-wrap">
                                    <input class="form-check-input" type="checkbox" name="remember">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span> Recordar Contraseña</span>
                            </div>
                            <button class="btn btn-primary mt-4" type="submit">Iniciar</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- SCRIPTS -->
    <!-- Global Required Scripts Start>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.js') }}"> </script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"> </script>
    <!-- Global Required Scripts End -->
    <!-- Medboard core JavaScript -->
    <script src="{{ asset('assets/js/framework.js') }}"></script>
</body>

</html>