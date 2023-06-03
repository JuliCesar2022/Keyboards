
chat= [
    {send:true, message: "Hi!"},
    {send:false, message: "response"},
    {send:true, message: ""},
    {send:false, message: "response"},

]


var i=0;
function updateChat(){
    var today = new Date();

// obtener la fecha y la hora
var now = today.toLocaleString();

    i++
    let scroll= document.getElementById("scroll_mesage");
    if(chat[chat.length-1].send){
        //mi mensaje
        let newDiv = document.createElement("div");
    newDiv.setAttribute("id", "mensaje" +i );
    document.querySelector(".escribir").appendChild(newDiv);
    newDiv.classList.add("classmens");
    document.getElementById("mensaje"+i).innerHTML= '<p class="usario"> '+chat[chat.length-1].message+'</p> '
    document.getElementById("mensaje"+i).style='display:flex;justify-content:end;'
        //loading

        let newDiv2 = document.createElement("div");
        newDiv2.setAttribute("id", "loading" );
        document.querySelector(".escribir").appendChild(newDiv2);
        newDiv2.classList.add("classmens");
        document.getElementById("loading").innerHTML= '<span class="loader-chat"></span>'



       // scroll.insertAdjacentElement("beforeend", newDiv);
        scroll.scrollTop=scroll.scrollHeight;

    }else{

        document.getElementById("loading").remove();



        let newDiv = document.createElement("div");
        newDiv.setAttribute("id", "mensaje" +i );
        document.querySelector(".escribir").appendChild(newDiv);
        newDiv.classList.add("classmens");
        document.getElementById("mensaje"+i).innerHTML= '<p class="false"> '+chat[chat.length-1].message+'</p> '
        document.getElementById("mensaje"+i).style='display:flex;'
        scroll.scrollTop=scroll.scrollHeight;
    }

    document.getElementById("mensaje").value="";
}

async function sendQuestion(messague){
//peticion

    console.log(messague.message)

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json");

    var raw = JSON.stringify({
        "token": "1224",
        "message": messague.message,
        "purge": false,
        "defaultProntID": "3",
        "poeToken": "ZEh-lSqdAxtEWUK8dtuAGg%3D%3D",
        "phone": "3026736193"
    });

    var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
    };

    fetch("https://principalpoebot.onrender.com/send", requestOptions)
        .then(response => response.text())
        .then(result => {

            console.log(result)

            let resp = JSON.parse(result)

            if(resp.success){
                let mess = {send:false,message: resp.message }

                chat.push(mess)
                updateChat();
            }else{
                let mess = {send:false,message: "ERROR" }
                chat.push(mess)
                updateChat();
            }

        })
        .catch(error => console.log('error', error));









}


async function addConversacion(){
console.log("holi")
    //Anadir a la lista de conversacion
    // ....
    var mensaje=document.getElementById("mensaje").value


    if(mensaje.length>0){

       let mess= {send:true,message: mensaje }
       chat.push(mess)






       updateChat();

       sendQuestion(chat[chat.length - 1]);


    }




}

function enviarenter(){

    var codigo = event.which || event.key;
    var tecla = String.fromCharCode(codigo)
if(codigo==13){
    addConversacion()
}
}
function cerrarchat(){

    document.getElementById("chat").innerHTML=`<div onclick="abrirchat()" style="font-size: 50px;background: rgba(255, 202, 202, 1);color: red" id="chat" class="chat">
          <ion-icon  name="chatbubble-ellipses-outline"></ion-icon>


      </div> `
    document.getElementById("chat").style='animation: cerrarchat .1s forwards;';
}

function abrirchat(){

    document.getElementById("chat").onclick=""
    document.getElementById('chat').style='animation: chat .3s forwards;'
    document.getElementById('chat').innerHTML=`
    <div class="x" ><div class="iconox" onclick="cerrarchat()"><ion-icon   name="close-outline"></ion-icon></div></div>
    <div class="titulo">
    <div class="title"><p>Atencion al cliente</p> </div>

</div>

<div class="escribir" id="scroll_mesage">
<div class="classmens" id="ayuda"><p class="false">hola en que te puedo ayudar?</p></div>
</div>
<div class="mensajear">
<div class="enviar" >

<input placeholder="En que podemos ayudarte" onkeydown="enviarenter()" name="mensaje" id="mensaje">
<div class="iconenviar" onclick="addConversacion()" > <ion-icon name="send"></ion-icon></div>
<div/>
</div>
`

    document.getElementById('mensaje').focus();


}
