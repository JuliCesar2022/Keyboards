<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        .eviado{
            height: 100px;
            width: 100%;
            max-width: 2000px;
             background: linear-gradient(to right, #FF575B, #FF3B5F, #FF2161, #FF0B64);
            display: flex;
            justify-content: center;
        }
        .enviar{
            display: flex;
            justify-content: center;
            width: 500px;
        }
    </style>
</head>
<body>

<div class="eviado">
    <a href="{{route('keyboard')}}">
    <ion-icon style="  font-size: 1.3rem; color: white;" name="arrow-back-outline"></ion-icon>

    </a>

<div class="enviar" >
   <h1 >Keyboards</h1> </div>
</div>
<div class="gracias" >

    <div class="containstitulo" style="display: flex;flex-direction: column;justify-content: center;align-items: center">
        <br>Gracias por solicitar nuestros servicios </br>nos comunicaremos contigo lo mas pronto posible </br> si deseas puedes acercarte a nuestos puntos de atencion</h2>

    </div>



</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
