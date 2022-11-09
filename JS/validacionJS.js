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
const divDir1 = document.getElementById("r5")
const divDir3 = document.getElementById("r6")
const divDir4 = document.getElementById("r7")
const divCard = document.getElementById("r8")
const resDir1 = document.getElementById("v6");
const resDir3 = document.getElementById("v7");
const resDir4 = document.getElementById("v8");
const divO = document.getElementById("r11");
const divCVV = document.getElementById("r12");
const resO = document.getElementById("v11");
const resCVV = document.getElementById("v12");
const resCaducidad = document.getElementById("v13");
const divCaducidad = document.getElementById("r13");
const ayoC = document.getElementById("ayoCaducidad")
const mesC = document.getElementById("mesCaducidad")

const cn = document.getElementById("v9");
const divSubmit=document.getElementById("r10")
const resultSubmit= document.getElementById("v10");
const cardN = document.getElementById("cardNumber");
const card = document.getElementsByName("tipotarjeta")

const owner = document.getElementById("owner")
const cvv = document.getElementById("cvv")

dir1.addEventListener("keyup",comprobarDirPais);
dir2.addEventListener("keyup",comprobarDirPais);
dir3.addEventListener("keyup",comprobarDirPais);
dir4.addEventListener("keyup",comprobarDirPais);
pais.addEventListener("click",comprobarDirPais);
const header = document.getElementById("headerLogo");
const m1 = document.getElementById("m1");
const logo = document.getElementById("logo");
document.addEventListener("scroll",headL);
const rest = document.getElementById("reset");
rest.addEventListener("click",resetear);
const body = document.getElementById("body");
form.addEventListener("keydown",env);
function env() {
    divSubmit.style.display="none";
}
function resetear() {
    divCard.style.display="none"
    divDir4.style.display="none"
    divDir3.style.display="none"
    divDir1.style.display="none"
    tarjeta.style.display="none"
    divC.style.display="none";
    divD.style.display="none";
    divNom.style.display="none";
    divE.style.display="none";
    divSubmit.style.display="none";
}

function headL() {
    console.log(window.innerWidth);
    console.log(window.scrollY);
    if(window.innerWidth > 600){
        if(window.scrollY > 100){
            m1.style.display="none";
            logo.style.marginLeft="-35.8vw";
            logo.style.width="12vw"
            logo.style.height="7vw"
            header.style.height="6vw";
        }else{
            m1.style.display="flex";
            logo.style.marginLeft="0vw";
            logo.style.width="20vw"
            logo.style.height="10vw"
            header.style.height="9vw";
        }
    }else if(window.innerWidth < 600){
        if(window.scrollY > 50){
            m1.style.display="none";
            logo.style.marginLeft="-40vw";
            logo.style.width="20vw"
            logo.style.height="13vw"
            header.style.height="11vw";
        }else{
            m1.style.display="flex";
            logo.style.marginLeft="0vw";
            logo.style.width="28vw"
            logo.style.height="16vw"
            header.style.height="13vw";
        }
    }

    
}

function validar(e){
    e.preventDefault();

if(comprobarNombre(nombre)&comprobarApellido(apellidos)&comprobarMail(mail)
&comprobarFecha(fecha.value)&comprobarContrasenna(psw1,psw2)&comprobarDir1(dir1)&comprobarDir3(dir3)&comprobarDir4(dir4)&comprobarTarjeta(card,cardN)
&comprobarowner(owner)&comprobarcvv(cvv)&comprobardatecard(ayoC,mesC)){
    divSubmit.style.display="flex";
    resultSubmit.innerHTML="El formulario se ha enviado correctamente";
    document.getElementById('form').reset() // al enviarse el formulario se vacian los campos
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
    const number = new RegExp('(?=.*[0-9])');
    let nom= nombre.value;
    let sinEspacios= nom.trim();// se eliminan espacios al inicioy final de la cadena
     let cont=0;
     if(nom.length == 0){
        divNom.style.display="flex";
        resNom.innerHTML= "El nombre es un campo obligatorio";
        return false;
    }
    for (let i = 0; i < sinEspacios.length; i++) {
        const element = sinEspacios[i];
      
        if(element== " "){// cuanto numero de espacios en blanco
            cont++;
        }
    }
    if(number.test(nombre.value)){
        divNom.style.display="flex"
        resNom.innerHTML="El nombre no admite numeros";
        return false;
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
    const number = new RegExp('(?=.*[0-9])');
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
    if(number.test(apellidos.value)){
        divNom.style.display="flex"
        resAp.innerHTML="El apellido no admite numeros";
        return false;
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

    const expReg= /^(?=.*\d)(?=.*[!-+<-@])(?=.*[A-Z])(?=.*[a-z]).{8,}$/;
    const long= new RegExp('.{8,}');
    const mayus= new RegExp('(?=.*[A-Z])');
    const minusc= new RegExp('(?=.*[a-z])');
    const numer=new RegExp('(?=.*[0-9])');
    const especial= new RegExp('(?=.*[*^!-+<-@]+).*');

    if(psw1.value.length == 0 || psw2.value.length == 0){
        divC.style.display="flex";
         resC.innerHTML= "Las contraseñas es un campo obligatorio";
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
            
            return false;
        }else{
            
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
            tarjeta.style.display="inline";//mostrar campos de tarjeta
    }else{
        tarjeta.style.display="none";//ocultar campos de tarjeta
        

    }
    
}

function comprobarDir1(dir1) {
    const number = new RegExp('(?=.*[0-9])');
    if(dir1.value.length == 0){
        divDir1.style.display="none"
        
        return true;
    }else{
        if(number.test(dir1.value)){
            divDir1.style.display="inline"
            resDir1.innerHTML="No se admiten numeros";
            return false;
            
         }else{
             divDir1.style.display="none"
         }
    }
}
function comprobarDir3(dir3) {
    const number = new RegExp('(?=.*[0-9])');
    if(dir3.value.length == 0){
        divDir3.style.display="none"
        
        return true;
    }else{
        if(number.test(dir3.value)){
            divDir3.style.display="inline"
            resDir3.innerHTML="No se admiten numeros";
            return false;
            
         }else{
             divDir3.style.display="none"
         }
    }
}
function comprobarDir4(dir4) {
    const number2 = new RegExp("(?=.*[^0-9])");
    if(dir4.value.length == 0){
        divDir4.style.display="none"
        
        return true;
    }else{
        if(number2.test(dir4.value) || dir4.value.length != 5){
            divDir4.style.display="inline"
            resDir4.innerHTML="Solo se admiten 5 numeros";
            return false;
         }else{
             divDir4.style.display="none"
         }
        }
     
}

function comprobarTarjeta(card,cardN) {
    var visaRegEx = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
    var mastercardRegEx = /^(?:5[1-5][0-9]{14})$/;
    var amexpRegEx = /^(?:3[47][0-9]{13})$/;
    if(cardN.value.length == 0){
        divCard.style.display="none"
        
        return true;
    }
    if(card[0].checked){//comprbacion visa
        if(!visaRegEx.test(cardN.value)){
            divCard.style.display="inline"
            cn.innerHTML="El numero o el tipo de tarjeta no son correctos";
            return false;
        }else{
            divCard.style.display="none"
            return true;
        }
    }
    if(card[1].checked){//comprobacion mastercard
        if(!mastercardRegEx.test(cardN.value)){
            divCard.style.display="inline"
            cn.innerHTML="El numero o el tipo de tarjeta no son correctos";
            return false;
        }else{
            divCard.style.display="none"
            return true;
        }
    }
    if(card[2].checked){//comprobacion american express
        if(!amexpRegEx.test(cardN.value)){
            divCard.style.display="inline"
            cn.innerHTML="El numero o el tipo de tarjeta no son correctos";
            return false;
        }else{
            divCard.style.display="none"
            return true;
        }
    }
}
function comprobarowner(owner) {
    const number = new RegExp('(?=.*[0-9])');
    if(owner.value.length == 0){
        divO.style.display="none"
        return true;
    }else{
        if(number.test(owner.value)){
            divO.style.display="inline"
            resO.innerHTML="No se admiten numeros";
            return false;
            
         }else{
             divO.style.display="none"
         }
    }
}
function comprobarcvv(cvv) {
    const number2 = new RegExp("(?=.*[^0-9])");
    if(cvv.value.length == 0){
        divCVV.style.display="none"
        
        return true;
    }else{
        if(number2.test(cvv.value) || cvv.value.length != 3){
            divCVV.style.display="inline"
            resCVV.innerHTML="Solo se admiten 3 numeros";
            return false;
         }else{
             divCVV.style.display="none"
         }
        }
     
}

function comprobardatecard(ayo,mes) {
    var date = new Date(); 
    var month = date.getMonth();
    if(ayo.value == 22){
        if(month <= mes.value){
            divCaducidad.style.display="none";
            return true;
        }else{
            divCaducidad.style.display="flex";
            resCaducidad.innerHTML="La tarjeta esta caducada"
            return false;
        }
    }else{
        divCaducidad.style.display="none";
        return true;
    }
    
}





