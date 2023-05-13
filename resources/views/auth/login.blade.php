<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="/css/responsive_login.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Keyboards</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


<div class="containlogin">

    <div class="login">
        <a style="width: 100%;" class="navbar-brand" href="{{ url('/') }}">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </a>
        <img src="/img/logo.png" alt="" class="logo">
        <div class="inicio"><p>Iniciar sesion</p></div>
        <div class="form">

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="correo">
                    <div class="input">

                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <small>este usuario no existe</small>
                                    </span>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="password">
                    <div class="input">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <small>Contraseña incorrecta</small>
                                    </span>
                            @enderror
                        </div>


                    </div>

                </div>
                <div class="btn">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>


                    <small><a href="{{ route('register') }}">Crear cuenta</a></small>
                </div>


            </form>


        </div>
    </div>



</div>

<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- <script src="/js/index.js"></script> -->

<script>

    document.addEventListener("keydown", (e) => {
        if (e.keyCode === 13) {
            e.preventDefault();
            const form = document.forms[0];
            const currentIndex = Array.from(form.elements).indexOf(e.target);
            const isLastElement = currentIndex === form.elements.length - 2;
            if (isLastElement) {
                form.submit();
            } else {
                form.elements[(currentIndex + 1) % form.elements.length].focus();
            }
        }
    });

</script>
<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>

