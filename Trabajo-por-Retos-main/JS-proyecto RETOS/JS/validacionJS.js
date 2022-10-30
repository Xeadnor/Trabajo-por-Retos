
const form = document.getElementById("formulario");
form.addEventListener("submit", validar);

const nombre = document.getElementById("nombre");
const apellidos = document.getElementById("apellidos");
const psw1 = document.getElementById("contrasena1");
const psw2 = document.getElementById("contrasena2");

function validar(){


if(!comprobarNombre(nombre)){
    alert("El nombre no puede tener más de 2 palabras");
}
if(!comprobarApellido(apellidos)){
    alert("El apellido no puede tener más de 2 palabras");
}

if(comprobarNombre(nombre)&&comprobarApellido(apellidos)&& comprobarContrasenna(psw1, psw2)){
    alert("Se ha enviado el formulario");
    return true;
}
  return false;
}

function comprobarNombre(nombre){
    let nom= nombre.value;
    let sinEspacios= nom.trim();
     let cont=0;
    for (let i = 0; i < sinEspacios.length; i++) {
        const element = sinEspacios[i];
      
        if(element== " "){
            cont++;
        }
    }
    
    if (cont<=1){
        return true;
    }
    return false;
}

function comprobarApellido(apellidos){
    let ap= apellidos.value;
    let sinEspacios= ap.trim();
    let cont=0;
    for (let i = 0; i < sinEspacios.length; i++) {
        const element = sinEspacios[i];
      
        if(element== " "){
            cont++;
        }
    }
    
    
    if (cont<=1){
        return true;
    }
    return false;

}

function comprobarContrasenna(psw1, psw2){


    const expReg= new RegExp('(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[^\w\s]).{8,}');//NO CUMPLEN LOS CARACTERES ESPECIALES!!!!!
    const long= new RegExp('.{8,}');
    const mayus= new RegExp('(?=.*[A-Z])');
    const minusc= new RegExp('(?=.*[a-z])');
    const numer=new RegExp('(?=.*[0-9])');


    if (expReg.test(psw1.value)) {
        if(psw1.value==psw2.value){  
            return true;
        }else{
            alert("Las contraseñas no coinciden");
        }
    }else{
        if(!long.test(psw1.value)){
            alert("La contraseña debe tener al menos 8 caracteres")
        }else if(!mayus.test(psw1.value)){
            alert("La contraseña debe incluir al menos una letra mayúscula")
        }else if(!minusc.test(psw1.value)){
            alert("La contraseña debe incluir al menos una letra minúscula")
        }else if(!numer.test(psw1.value)){
            alert("La contraseña debe incluir al menos un número")
        }else{
            alert("La contraseña debe incluir al menos un caracter especial")
        }
        
    }
return false;


}