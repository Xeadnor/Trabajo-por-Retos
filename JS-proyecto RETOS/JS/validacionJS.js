const form = document.getElementById("formulario");
const boton = document.getElementById("boton")
form.addEventListener("submit", validar);
const tarjeta = document.getElementById("tarjeta");
const nombre = document.getElementById("nombre");
const apellidos = document.getElementById("apellidos");
const psw1 = document.getElementById("contrasena1");
const psw2 = document.getElementById("contrasena2");
const pais= document.getElementById("pais");
const dir1= document.getElementById("direccion1");
const dir2= document.getElementById("direccion2");
const dir3= document.getElementById("direccion3");
const dir4= document.getElementById("direccion4");
const mail = document.getElementById("mail");
const fecha = document.getElementById("fecha");
const resNom= document.getElementById("resultNombre");
const resAp= document.getElementById("resultApellidos");
const resM= document.getElementById("resultMail");
const resC= document.getElementById("resultCont");

dir1.addEventListener("keydown",comprobarDirPais);
dir2.addEventListener("keydown",comprobarDirPais);
dir3.addEventListener("keydown",comprobarDirPais);
dir4.addEventListener("keydown",comprobarDirPais);
pais.addEventListener("click",comprobarDirPais);


function validar(e){
    e.preventDefault();

if(comprobarNombre(nombre)&&comprobarApellido(apellidos)&&comprobarMail(mail)&& comprobarContrasenna(psw1, psw2)
&&comprobarFecha(fecha.value)){
    alert("Se ha enviado el formulario");
    return true;
}
  return false;
}

function comprobarFecha(fecha) {
   var fHoy = new Date();
   var f = new Date(fecha)
   fHoy.setFullYear;
   fHoy.setMonth;
   fHoy.setDate;
   console.log(fHoy);
   console.log(f);

   if((fHoy - f) > 568025136000 ){
    return true;
   }else{
    alert("Debes tener al menos 18 años")
    return false;
   }
    
}
function comprobarNombre(nombre){
    let nom= nombre.value;
    let sinEspacios= nom.trim();
     let cont=0;
     if(nom.length == 0){
        resNom.innerHTML= "El nombre es un campo obligatorio";
        resNom.style.color="#E72405"
        return false;
    }
    for (let i = 0; i < sinEspacios.length; i++) {
        const element = sinEspacios[i];
      
        if(element== " "){
            cont++;
        }
    }
    
    if (cont<=1){
        resNom.innerHTML= ""
        return true;
    }else{
        resNom.innerHTML= "El nombre no puede tener más de 2 palabras";
        resNom.style.color="#E72405"
        return false;
    }

}

function comprobarApellido(apellidos){
    let ap= apellidos.value;
    let sinEspacios= ap.trim();
    let cont=0;
    if(ap.length == 0){
        resAp.innerHTML= "El apellido es un campo obligatorio";
        resAp.style.color="#E72405"
        
        return false;
    }
    for (let i = 0; i < sinEspacios.length; i++) {
        const element = sinEspacios[i];
      
        if(element== " "){
            cont++;
        }
    }
    
    
    if (cont<=1){
        resAp.innerHTML= "";
       
        return true;
    }else{
        resAp.innerHTML= "El apellido no puede tener más de 2 palabras";
        resAp.style.color="#E72405"
    
        return false;
        
    }
   

}

function comprobarMail(mail) {
    
    const email = new RegExp(/[a-z0-9_\-.]+[@]+[a-z]+\.[a-z]*/);
    if(mail.value.length == 0){
        resM.innerHTML= "El e-mail es un campo obligatorio";
        resM.style.color="#E72405";
        return false;
    }
    if(email.test(mail.value)){
        resM.innerHTML= "";
        return true;
    }else{
        resM.innerHTML= "No es un email válido";
        resM.style.color="#E72405";
        return false;
    }
    
}

function comprobarContrasenna(psw1, psw2){

    //NO CUMPLEN LOS CARACTERES ESPECIALES!!!!!

    const expReg= new RegExp('(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[^\w\s]).{8,}');
    const long= new RegExp('.{8,}');
    const mayus= new RegExp('(?=.*[A-Z])');
    const minusc= new RegExp('(?=.*[a-z])');
    const numer=new RegExp('(?=.*[0-9])');


    if (expReg.test(psw1.value)) {
        if(psw1.value==psw2.value){  
            return true;
        }else{
            resC.innerHTML= "Las contraseñas no coinciden";
            resC.style.color="#E72405"
        }
    }else{
        if(!long.test(psw1.value)){
            resC.innerHTML= "La contraseña debe tener al menos 8 caracteres";
            resC.style.color="#E72405"
        }else if(!mayus.test(psw1.value)){
            resC.innerHTML= "La contraseña debe incluir al menos una letra mayúscula";
            resC.style.color="#E72405"
        }else if(!minusc.test(psw1.value)){
            resC.innerHTML= "La contraseña debe incluir al menos una letra minúscula";
            resC.style.color="#E72405"
        }else if(!numer.test(psw1.value)){
            resC.innerHTML= "La contraseña debe incluir al menos un número";
            resC.style.color="#E72405"
        }else{
            resC.innerHTML= "La contraseña debe incluir al menos un caracter especial";
            resC.style.color="#E72405"
        }
        
    }
return false;
}

function comprobarDirPais(){
    if(dir1.value.length!=0&&dir2.value.length!=0&&dir3.value.length!=0&&dir4.value.length!=0){
        if(pais.value!="Ninguno"){
            tarjeta.style.display="inline";
            return true;
        }
    }

    const eRd1= new RegExp();
    const eRd3= new RegExp();

   return false;
}


