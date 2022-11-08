const form = document.getElementById("formulario");
const boton = document.getElementById("boton")
boton.addEventListener("click", validar);
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
const resNom= document.getElementById("v1");
const divNom = document.getElementById("r1")
const divE = document.getElementById("r2")
const resAp= document.getElementById("v2"); 
const resM= document.getElementById("v3");
const divD = document.getElementById("r3")
const divC = document.getElementById("r4")
const resF= document.getElementById("v4");
const resC= document.getElementById("v5");
const ty = document.getElementById("ty");
const t1 = document.getElementById("t1");
const t2 = document.getElementById("t2");
const t3 = document.getElementById("t3");
const t4 = document.getElementById("t4");

dir1.addEventListener("keyup",comprobarDirPais);
dir2.addEventListener("keyup",comprobarDirPais);
dir3.addEventListener("keyup",comprobarDirPais);
dir4.addEventListener("keyup",comprobarDirPais);
pais.addEventListener("click",comprobarDirPais);


function validar(e){
    e.preventDefault();

if(comprobarNombre(nombre)&comprobarApellido(apellidos)&comprobarMail(mail)
&comprobarFecha(fecha.value)&comprobarContrasenna(psw1,psw2)){
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
   if((fHoy - f) < 568025136000 ){
    divD.style.display="flex";
    resF.innerHTML= "El usuario debe ser mayor de 18 años";
    return false;
   }else{
    divD.style.display="none";
    return true;
   }
    
}
function comprobarNombre(nombre){
    let nom= nombre.value;
    let sinEspacios= nom.trim();
     let cont=0;
     if(nom.length == 0){
        divNom.style.display="flex";
        resNom.innerHTML= "El nombre es un campo obligatorio";
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
        divNom.style.display="flex";
        resNom.innerHTML= "El nombre no puede tener más de 2 palabras";
        return false;
    }

}

function comprobarApellido(apellidos){
    let ap= apellidos.value;
    let sinEspacios= ap.trim();
    let cont=0;
    if(ap.length == 0){
        divNom.style.display="flex";
        resAp.innerHTML= "El apellido es un campo obligatorio";
        
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
        divNom.style.display="flex";
        resAp.innerHTML= "El apellido no puede tener más de 2 palabras";
    
        return false;
        
    }
   

}

function comprobarMail(mail) {
    
    const email = new RegExp(/[a-z0-9_\-.]+[@]+[a-z]+\.[a-z]*/);
    if(mail.value.length == 0){
        divE.style.display="flex";
        resM.innerHTML= "El e-mail es un campo obligatorio";
        return false;
    }
    if(email.test(mail.value)){
        resM.innerHTML= "";
        return true;
    }else{
        divE.style.display="flex";
        resM.innerHTML= "No es un email válido";
        return false;
    }
    
}

function comprobarContrasenna(psw1, psw2){

    console.log(psw1.value);
    console.log(psw2.value);

    const expReg= /^(?=.*\d)(?=.*[!-+<-@])(?=.*[A-Z])(?=.*[a-z]).{8,}$/
    const long= new RegExp('.{8,}');
    const mayus= new RegExp('(?=.*[A-Z])');
    const minusc= new RegExp('(?=.*[a-z])');
    const numer=new RegExp('(?=.*[0-9])');
    const especial= new RegExp('(?=.*[*^!-+<-@]+).*');

    if(psw1.value.length == 0 || psw2.value.length == 0){
        divC.style.display="flex";
         resC.innerHTML= "Las contraseñas son un campo obligatorio";
         return false;
    }
    if(psw1.value!=psw2.value){  
        divC.style.display="flex";
        resC.innerHTML= "Las contraseñas no coinciden";
        return false;
    }

    if (expReg.test(psw1.value)) {
        divC.style.display="none";
        return true;
    }else{
        console.log("false")
        if(!long.test(psw1.value)){
            divC.style.display="flex";
            resC.innerHTML= "La contraseña debe tener al menos 8 caracteres";
            return false;
        }else if(!mayus.test(psw1.value)){
            divC.style.display="flex";
            resC.innerHTML= "La contraseña debe incluir al menos una letra mayúscula";
            return false;
        }else if(!minusc.test(psw1.value)){
            divC.style.display="flex";
            resC.innerHTML= "La contraseña debe incluir al menos una letra minúscula";
            return false;
        }else if(!numer.test(psw1.value)){
            divC.style.display="flex";
            resC.innerHTML= "La contraseña debe incluir al menos un número";
            return false;
        }else if(!especial.test(psw1.value)){
            divC.style.display="flex";
            resC.innerHTML= "La contraseña debe incluir al menos un caracter especial";
            console.log(psw1.value)
            return false;
        }else{
            console.log("prueba")
        }
        
    }
return false;
}

function comprobarDirPais(){
    var date = new Date;
    var año = date.getFullYear();
    ty.innerHTML = año;
    t1.innerHTML = año+1;
    t2.innerHTML = año+2;
    t3.innerHTML = año+3;
    t4.innerHTML = año+4;
    if(dir1.value.length!=0&&dir2.value.length!=0&&dir3.value.length!=0&&dir4.value.length!=0&&pais.value!="Ninguno"){
            tarjeta.style.display="inline";
    }else{
        tarjeta.style.display="none";

    }

    const eRd1= new RegExp();
    const eRd3= new RegExp();

   return false;
}


