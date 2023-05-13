
paises("pais");


function paises(id){

    console.log(id);

valor=document.getElementById(id).value
if(valor=='colombia'){
    document.getElementById('ciudad').innerHTML=`
  <option value="">Selecciona una ciudad</option>
        <option value="Cartagena">Cartagena</option>
                        <option value="Bogota">Bogota</option>
                        <option value="Barranquilla">Barranquilla</option>
    `
}

if(valor=='brasil'){
    document.getElementById('ciudad').innerHTML=`
      <option value="">Selecciona una ciudad</option>
    <option value="Sao paulo">Sao paulo </option>
    <option value="Rio de janeiro">Rio de janeiro</option>
    `
}
if(valor==''){
    document.getElementById('ciudad').innerHTML=`
    <option value="">Selecciona una ciudad</option>`
}


}
