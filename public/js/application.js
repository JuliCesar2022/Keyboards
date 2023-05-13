



// Obtener la altura del elemento utilizando clientHeight



mostrarContenido('contenido1');
function mostrarContenido(id) {

    var contenidos = document.getElementsByClassName("contenido");
    for (var i = 0; i < contenidos.length; i++) {
        if (contenidos[i].id === id) {
            contenidos[i].style.display = "block";
        } else {
            contenidos[i].style.display = "none";
        }
    }
}

let inicio =false;
function application(login){
    console.log(inicio)
    if(inicio){
        inicio=false;
    }else {
        inicio=true;
    }
    if(inicio){
        document.getElementById('nav-item').innerHTML=`
 <a class="nav-link" onclick="application() ">
    <ion-icon  style="font-size: 1rem;"  name="person-outline"></ion-icon>
 </a>


    <div style="position: absolute;" >
    <p onclick="cerrar()" style="cursor: pointer"">
    cerrar sesion
</p> </div>


`
    }else {
        document.getElementById('nav-item').innerHTML=`
 <a class="nav-link" onclick="application()" >
     <ion-icon  style="font-size: 1rem;"  name="person-outline"></ion-icon>
 </a>

    `
    }








}



function cerrar(){
    document.getElementById('logout-form').submit();
    console.log("cerrar")
}

let abrirhistorial=false;
function cerrarhistorial(){

    if(abrirhistorial){
        abrirhistorial=false

    }else{
        abrirhistorial=true

    }

    if(abrirhistorial){
// Obtener el elemento con el ID "cerrar"
        // Obtener el elemento con el ID "cerrar"
        const cerrarElemento = document.getElementById("cerrar");

// Obtener el ancho del elemento usando getBoundingClientRect()
        const anchoCerrar = cerrarElemento.getBoundingClientRect().width;

// Actualizar la variable CSS "anchohistorial" con el ancho del elemento
        cerrarElemento.style.setProperty("--anchohistorial", `${anchoCerrar}px`);

   document.getElementById('rotate').style="rotate:180deg";
    document.getElementById('cerrar').style= `position: absolute;float: left;width: 100%;display: flex;justify-content: end;z-index: 100000; pointer-events: none;animation: animacioncerrarreverse 1s forwards`;
    }else{
        // Obtener el elemento con el ID "cerrar"
        const cerrarElemento = document.getElementById("cerrar");

// Obtener el ancho del elemento usando getBoundingClientRect()
        const anchoCerrar = cerrarElemento.getBoundingClientRect().width;

// Actualizar la variable CSS "anchohistorial" con el ancho del elemento
        cerrarElemento.style.setProperty("--otroancho", `${anchoCerrar}px`);

   document.getElementById('rotate').style="";
    document.getElementById('cerrar').style= `position: absolute;float: left; width: 100%;display: flex;justify-content: end;z-index: 100000; pointer-events: none;animation: animacioncerrar 1s forwards`;


    }

}


window.addEventListener('resize', function() {
    // obtén el ancho de la ventana actual
    var ancho = window.innerWidth;

    // haz algo con el ancho, como mostrarlo en la consola

    if(ancho<700){
        abrirhistorial=true;
    console.log('El ancho de la ventana es: ' + ancho);

        cerrarhistorial();


    }
});
var ancho = window.innerWidth;
if(ancho<700){
    abrirhistorial=true;
    console.log('El ancho de la ventana es: ' + ancho);

    cerrarhistorial();
}



// Obtener la URL actual
let url = window.location.href;
let urlObj = new URL(url);
let ruta = urlObj.pathname;


if(ruta == "/app"){

    let urlActual = window.location.search;
    let params = new URLSearchParams(urlActual);
    let equipo = params.get("equipo");



    if(equipo){
        document.getElementById("new").value="false";
        const miDiv = document.getElementById('opcion-nuevo');
        const miDiv1 = document.getElementById('opcion-nuevo1');
        const miDiv2 = document.getElementById('opcion-nuevo2');
        const miDiv3= document.getElementById('opcion-nuevo3');
        const elementos = miDiv.querySelectorAll('input, textarea, select');
        const elementos1 = miDiv1.querySelectorAll('input, textarea, select');
        const elementos2 = miDiv2.querySelectorAll('input, textarea, select');
        const elementos3 = miDiv3.querySelectorAll('input, textarea, select');

        elementos[0].required = false;
        elementos1[0].required = false;
        elementos2[0].required = false;
        elementos3[0].required = false;

        var opc= document.getElementById('opcion_existente')
        var ambos = document.getElementById("ambos");
        var ambos1=document.getElementById('ambos1');

        var equipo_id=document.getElementById('equipo_id');
        equipo_id.value = equipo;

        document.getElementsByClassName('new')[0].style.display='none'

        document.getElementById('opcion-nuevo').style.display='none'

        console.log("equipo existente")

        opc.style.display = 'block';
        ambos.style.display = 'block';
        ambos1.style.display = 'block';
    }


}

function mostraropc(){
    selector= document.getElementById('new').value;
    if(selector!=''){

        if (selector== 'true'){
            document.getElementById('new').required=false;
            const miDiv = document.getElementById('opcion_existente');
            const elementos = miDiv.querySelectorAll('input, textarea, select');

            elementos.forEach(function(elemento) {
                elemento.required = false;
            });


            document.getElementById('opcion_existente').style.display='none'
            console.log("nuevo equipo")
            document.getElementsByClassName('new')[0].style.display='none'


            var opc = document.getElementById('opcion-nuevo');
            var opc1 = document.getElementById('opcion-nuevo1');
            var opc2 = document.getElementById('opcion-nuevo2');
            var opc3= document.getElementById('opcion-nuevo3')
            var ambos = document.getElementById("ambos");
            var ambos1=document.getElementById('ambos1');

            opc.style.display = 'block';
            opc1.style.display = 'block';
            opc2.style.display = 'block';
            opc3.style.display = 'block';
            ambos.style.display = 'block';
            ambos1.style.display = 'block';




        }

        if (selector=='false'){

            const miDiv = document.getElementById('opcion-nuevo');
            const miDiv1 = document.getElementById('opcion-nuevo1');
            const miDiv2 = document.getElementById('opcion-nuevo2');
            const miDiv3= document.getElementById('opcion-nuevo3');
            const elementos = miDiv.querySelectorAll('input, textarea, select');
            const elementos1 = miDiv1.querySelectorAll('input, textarea, select');
            const elementos2 = miDiv2.querySelectorAll('input, textarea, select');
            const elementos3 =miDiv3.querySelectorAll('input, textarea, select');

            elementos[0].required = false;
            elementos1[0].required = false;
            elementos2[0].required = false;
            elementos3[0].required = false;

           var opc= document.getElementById('opcion_existente')
            var ambos = document.getElementById("ambos");
            var ambos1=document.getElementById('ambos1');
            document.getElementsByClassName('new')[0].style.display='none'

            document.getElementById('opcion-nuevo').style.display='none'

            console.log("equipo existente")

            opc.style.display = 'block';
            ambos.style.display = 'block';
            ambos1.style.display = 'block';



        }
    }else {
        console.log("jodetee")
    }



}
