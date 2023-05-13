<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="registro_style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/registro_style.css">

    <!-- Icon -->

    <!-- Owl carousel -->



    <!-- Animate -->

    <!-- Main Style -->
    <!-- Responsive Style -->

    <title>Keyboards</title>

</head>
<body>

<div class="containregistro">

    <div class="registro">

        <h1  class="titulo" >

            <center> Crea tu cuenta </center> </h1>
        <small> <center> ¿Quieres iniciar sesion? <a style="color: white" href="{{ route('login') }}">Ingresa</a>  </center> </small>

    </div>
    <div class="containsform">
        <div class="form">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="campo">
                    <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                </div>
                <!-- buscar un gris bajito -->

                <div class="campo">
                    <h5 > Identificación </h5>
                    <input type="text" name="identificacion" value="{{old('identificacion')}} "  style/>
                </div>

                <div class="campo">
                    <h5 > Apellidos </h5>
                    <input type="text" name="apellido" id="apellido" value="{{old('apellido')}} " />

                </div>

                <div class="campo">
                        <h5 > Teléfono </h5>
                    <input type="tel" name="telefono" value="{{old('telefono')}}" id="telefono" />
                </div>
                <div class="campo">
                    <label for="email"  class="col-md-4 col-form-label text-md-end">Email</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <small>Su correo no es valido o ya existe</small>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="campo">
                    <h5 > Pais </h5>


                    <select name="Pais" class="form-control selecccion" onchange="paises(id)"  id="pais">
                        <option value="">Selecciona un Pais</option>
                        <option value="colombia" @if( old('Pais')=='colombia')selected @endif>Colombia</option>
                        <option value="brasil" @if( old('Pais')=='brasil')selected @endif> Brasil</option>

                    </select>

                    {!!  $errors->first('Pais', '<small><ion-icon name="alert-outline"></ion-icon>:message</small>')!!}

                </div>
                <div class="campo">

                    <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        {!!  $errors->first('password', '<small><ion-icon name="alert-outline"></ion-icon>:message</small>')!!}

                    </div>

                </div>

                <div class="campo">

                    <h5 > Ciudad </h5>

                    <select name="Ciudad" class="selecccion" id="ciudad">
                        <option value="">Selecciona una ciudad</option>

                    </select>
                    {!!  $errors->first('Ciudad', '<small><ion-icon name="alert-outline"></ion-icon>:message</small>')!!}
                </div>

                <div class="campo">

                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirma la contraseña</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                </div>

                <div class="campo">

                    <h5 > Dirección </h5>
                    <input type="text" name="direccion" />

                </div>




    </div>

        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>

        </form>


    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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

<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>
<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/main.js"></script>

<script src="js/paise.js"></script>
</body>
</html>

