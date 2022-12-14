//elementos formulario
const form = document.getElementById("formulario");
const boton = document.getElementById("boton");
const rest = document.getElementById("reset"); 
//maenjadores de eventos de elementos del formulario
rest.addEventListener("click",resetear);
form.addEventListener("keydown",env);
boton.addEventListener("click", validar);

//elementos para la comprobacion al enviar
const divSubmit=document.getElementById("r10")
const resultSubmit= document.getElementById("v10");

const nick = document.getElementById("nick");
//elementos para la validacion de nombre y apellidos
const nombre = document.getElementById("nombre");
const apellidos = document.getElementById("apellidos");
//elementos para mostrar resultado validacion nombre y apellidos
const resNom= document.getElementById("v1");
const divNom = document.getElementById("r1");
const resAp= document.getElementById("v2"); 


//elementos para la validacion de email
const mail = document.getElementById("mail");
//elementos para mostrar resultado validacion de email
const divE = document.getElementById("r2");
const resM= document.getElementById("v3");


//elementos para la validacion de la contrasenna
const psw1 = document.getElementById("contrasena1");
const psw2 = document.getElementById("contrasena2");
//elementos para mostrar resultado validacion de constrasenna
const divC = document.getElementById("r4");
const resC= document.getElementById("v5");


//elementos para la validacion de la fecha nacimiento
const fecha = document.getElementById("fecha");

//elementos para mostrar resultado validacion fecha nacimiento
const divD = document.getElementById("r3");
const resF= document.getElementById("v4");


//elementos para la validacion de la direccion
const pais= document.getElementById("pais");
const dir1= document.getElementById("direccion1");
const dir2= document.getElementById("direccion2");
const dir3= document.getElementById("direccion3");
const dir4= document.getElementById("direccion4");
//elementos para mostrar resultado validacion de direccion
const divDir1 = document.getElementById("r5")
const divDir3 = document.getElementById("r6")
const divDir4 = document.getElementById("r7")
const divCard = document.getElementById("r8")
const resDir1 = document.getElementById("v6");
const resDir3 = document.getElementById("v7");
const resDir4 = document.getElementById("v8");
const divNick = document.getElementById("r20");
const resNick = document.getElementById("v20");


//elementos para validar la tarjeta
const tarjeta = document.getElementById("tarjeta");
const ayoC = document.getElementById("ayoCaducidad")
const mesC = document.getElementById("mesCaducidad")
const cardN = document.getElementById("cardNumber");
const card = document.getElementsByName("tipotarjeta")
const owner = document.getElementById("owner")
const cvv = document.getElementById("cvv")
dir1.addEventListener("change",comprobarDirPais);
dir2.addEventListener("change",comprobarDirPais);
dir3.addEventListener("change",comprobarDirPais);
dir4.addEventListener("change",comprobarDirPais);
pais.addEventListener("change",comprobarDirPais);
//elementos para mostrar resultado de validaciones de la tarjeta
const cn = document.getElementById("v9");
const divO = document.getElementById("r11");
const divCVV = document.getElementById("r12");
const resO = document.getElementById("v11");
const resCVV = document.getElementById("v12");
const resCaducidad = document.getElementById("v13");
const divCaducidad = document.getElementById("r13");



//Elementos del header para modificar al hacer scroll
const header = document.getElementById("headerLogo");
const m1 = document.getElementById("m1");
const logo = document.getElementById("logo"); 
const body1 = document.getElementById("body"); 
const seta= document.getElementById("seta"); 
const divLogo1= document.getElementById("logo1"); 
const divLogo2= document.getElementById("logo2"); 
const menu = document.getElementById("menu");
document.addEventListener("scroll",headL);

const ty = document.getElementById("ty");
const t1 = document.getElementById("t1");
const t2 = document.getElementById("t2");
const t3 = document.getElementById("t3");
const t4 = document.getElementById("t4");

window.addEventListener("load", function() {
    var date = new Date;
    var a??o = date.getFullYear();
    ty.innerHTML = a??o;
    t1.innerHTML = a??o+1;
    t2.innerHTML = a??o+2;
    t3.innerHTML = a??o+3;
    t4.innerHTML = a??o+4;
  });


nombre.addEventListener("change",actualizar);
nick.addEventListener("change",actualizar);
apellidos.addEventListener("change",actualizar);
mail.addEventListener("change",actualizar);
contra.addEventListener("change",actualizar);
apellidos.addEventListener("change",actualizar);
apellidos.addEventListener("change",actualizar);
psw1.addEventListener("change",actualizar)
psw2.addEventListener("change",actualizar)
fecha.addEventListener("change",actualizar)
dir1.addEventListener("change",actualizar)
dir3.addEventListener("change",actualizar)
dir4.addEventListener("change",actualizar)
owner.addEventListener("change",actualizar)
cvv.addEventListener("change",actualizar)

//Comprobamos que al salir de un campo el valor si se cumple la restriccion desaparezca el aviso
function actualizar() {
    comprobarNombreAct(nombre);
    comprobarNickAct(nick);
    comprobarApellidoAct(apellidos);
    comprobarMailAct(mail);
    comprobarContrasennaAct(psw1,psw2)
    comprobarFecha(fecha.value)
    comprobarDir1(dir1)
    comprobarDir3(dir3)
    comprobarDir4(dir4)
    comprobarowner(owner)
    comprobarcvv(cvv)
}

//al enviar se coulte si estaba mostrado el mensaje de "El formulario se ha enviado correctamente"
function env() {
    divSubmit.style.display="none";
}

//al resetear todos los campos de mensajes de validacion que se estuvieran mostrando se ocultan
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

//al hacer scroll
function headL() {

    if(window.innerWidth > 600){
        if(window.scrollY > 100){//desaparece el logo con las letras de frikisetas y aparece s??lo la seta
            m1.style.display="none";
            divLogo1.style.display="none";
            divLogo2.style.display="inline";
            divLogo2.style.marginLeft="0vw";
            divLogo2.style.width="12vw"
            divLogo2.style.height="7vw"
            header.style.height="7vw";
            seta.style.width="7vw"
            seta.style.height="7vw"
            
           
        }else{//al volver arriba vuelve a aparecer el logo con las letras
            m1.style.display="flex";
            divLogo1.style.display="inline";
            divLogo2.style.display="none";
            divLogo1.style.marginLeft="38.5vw";
            divLogo1.style.width="20vw"
            divLogo1.style.height="10vw"
            header.style.height="9vw";
            menu.style.marginLeft="-11vw"
    
        }
    }else if(window.innerWidth < 600){
        if(window.scrollY > 50){
            m1.style.display="none";
            divLogo1.style.display="none";
            divLogo2.style.display="inline";
            divLogo2.style.marginLeft="15vw";
            divLogo2.style.width="20vw"
            divLogo2.style.height="13vw"
            header.style.height="10vw";
            seta.style.width="10vw"
            seta.style.height="10vw"
            // width:7vw;
            // height:7vw;
        }else{
            m1.style.display="flex";
            divLogo1.style.display="inline";
            divLogo2.style.display="none";
            divLogo1.style.marginLeft="33.5vw";
            divLogo1.style.width="28vw"
            divLogo1.style.height="16vw"
            header.style.height="13vw";
        }
    }
} 

//al enviar
function validar(e){

if(comprobarNick(nick)&comprobarNombre(nombre)&comprobarApellido(apellidos)&comprobarMail(mail)
&comprobarFecha(fecha.value)&comprobarContrasenna(psw1,psw2)&comprobarDir1(dir1)&comprobarDir3(dir3)&comprobarDir4(dir4)&comprobarTarjeta(card,cardN)
&comprobarowner(owner)&comprobarcvv(cvv)&comprobardatecard(ayoC,mesC)){
    divSubmit.style.display="flex";
     setTimeout(correcto, 500);
function correcto() {
    resultSubmit.innerHTML="El formulario se ha enviado correctamente";
}
    

}else{
    e.preventDefault();
}
if(!comprobarNick(nick)){
    nick.focus();
    return false;
}else if(!comprobarNombre(nombre)){
    nombre.focus();
    return false;
}else if(!comprobarApellido(apellidos)){
    apellidos.focus();
    return false;
}else if(!comprobarMail(mail)){
    mail.focus();
    return false;
}else if(!comprobarFecha(fecha.value)){
    fecha.focus();
    return false;
}else if(!comprobarContrasenna(psw1,psw2)){
    psw1.focus();
    return false;
}else if(!comprobarDir1(dir1)){
    dir1.focus();
    return false;
}else if(!comprobarDir3(dir3)){
    dir3.focus();
    return false;
}else if(!comprobarDir4(dir4)){
    dir4.focus();
    return false;
}else if(!comprobarTarjeta(card,cardN)){
    cardN.focus();
    return false;
}else if(!comprobarowner(owner)){
    owner.focus();
    return false;
}else if(!comprobarcvv(cvv)){
    cvv.focus();
    return false;
}else if(!comprobardatecard(ayoC,mesC)){
    mesC.focus();
    return false;
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
    resF.innerHTML= "El usuario debe ser mayor de 18 a??os";
    return false;
   }else{
    divD.style.display="none";
    return true;
   }
    
}
function comprobarNick(nick){
    let ni= nick.value;
    let sinEspacios= ni.trim();// se eliminan espacios al inicioy final de la cadena
     let cont=0;
     if(ni.length == 0){
        divNick.style.display="flex";
        resNick.innerHTML= "El nick es un campo obligatorio";
        return false;
    }
    for (let i = 0; i < sinEspacios.length; i++) {
        const element = sinEspacios[i];
      
        if(element== " "){// cuanto numero de espacios en blanco
            cont++;
        }
    } 
    if (cont<=0){
        resNick.innerHTML= ""
        return true;
    }else{
        divNick.style.display="flex";
        resNick.innerHTML= "El nick no puede tener m??s de 1 palabra";
        return false;
    }


}
function comprobarNickAct(nick){
    let ni= nick.value;
    let sinEspacios= ni.trim();// se eliminan espacios al inicioy final de la cadena
     let cont=0;
     if(ni.length == 0){
        divNick.style.display="flex";
        resNick.innerHTML= "El nick es un campo obligatorio";
        return false;
    }
    for (let i = 0; i < sinEspacios.length; i++) {
        const element = sinEspacios[i];
      
        if(element== " "){// cuanto numero de espacios en blanco
            cont++;
        }
    }
    if (cont<=0){
        resNick.innerHTML= ""
        return true;
    }else{
        divNick.style.display="flex";
        resNick.innerHTML= "El nick no puede tener m??s de 1 palabra";
        return false;
    }


}


function comprobarNombre(nombre){
    const number = new RegExp('(?=.*[0-9])');
    const especial= new RegExp('(?=.*[*^!-+<-@]+).*');
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
        resNom.innerHTML="El nombre no admite n??meros";
        return false;
    }
    if(especial.test(nombre.value)){
        divNom.style.display="flex"
        resNom.innerHTML="El nombre no admite caracteres especiales";
        return false;
        
    }
    
    if (cont<=1){
        resNom.innerHTML= ""
        return true;
    }else{
        divNom.style.display="flex";
        resNom.innerHTML= "El nombre no puede tener m??s de 2 palabras";
        return false;
    }


}
function comprobarNombreAct(nombre){
    const number = new RegExp('(?=.*[0-9])');
    const especial= new RegExp('(?=.*[*^!-+<-@]+).*');
    let nom= nombre.value;
    let sinEspacios= nom.trim();// se eliminan espacios al inicioy final de la cadena
     let cont=0;
    for (let i = 0; i < sinEspacios.length; i++) {
        const element = sinEspacios[i];
      
        if(element== " "){// cuanto numero de espacios en blanco
            cont++;
        }
    }
    if(number.test(nombre.value)){
        divNom.style.display="flex"
        resNom.innerHTML="El nombre no admite n??meros";
        return false;
    }
    if(especial.test(nombre.value)){
        divNom.style.display="flex"
        resNom.innerHTML="El nombre no admite caracteres especiales";
        return false;
        
    }
    
    if (cont<=1){
        resNom.innerHTML= ""
        return true;
    }else{
        divNom.style.display="flex";
        resNom.innerHTML= "El nombre no puede tener m??s de 2 palabras";
        return false;
    }


}

function comprobarApellido(apellidos){
    const number = new RegExp('(?=.*[0-9])');
    const especial= new RegExp('(?=.*[*^!-+<-@]+).*');
    
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
        resAp.innerHTML="El apellido no admite n??meros";
        return false;
    }
    if(especial.test(apellidos.value)){
        divNom.style.display="flex"
        resAp.innerHTML="El apellido no admite caracteres especiales";
        return false;
    }
    if (cont<=1){
        resAp.innerHTML= "";
        return true;
    }else{
        divNom.style.display="flex";
        resAp.innerHTML= "El apellido no puede tener m??s de 2 palabras";
    
        return false;
        
    }
   

}
function comprobarApellidoAct(apellidos){
    const number = new RegExp('(?=.*[0-9])');
    const especial= new RegExp('(?=.*[*^!-+<-@]+).*');
    let ap= apellidos.value;
    let sinEspacios= ap.trim();
    let cont=0;
    for (let i = 0; i < sinEspacios.length; i++) {
        const element = sinEspacios[i];
      
        if(element== " "){
            cont++;
        }
    }
    if(number.test(apellidos.value)){
        divNom.style.display="flex"
        resAp.innerHTML="El apellido no admite n??meros";
        return false;
    }
    if(especial.test(apellidos.value)){
        divNom.style.display="flex"
        resAp.innerHTML="El apellido no admite caracteres especiales";
        return false;
        
    }
    
    if (cont<=1){
        resAp.innerHTML= "";
        return true;
    }else{
        divNom.style.display="flex";
        resAp.innerHTML= "El apellido no puede tener m??s de 2 palabras";
    
        return false;
        
    }
   

}

function comprobarMail(mail) {
    const email = new RegExp(/(^[a-z]+)[@]([a-z]+)\.([a-z]{2,}$)/);
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
        resM.innerHTML= "No es un email v??lido";
        return false;
    }
    
}

function comprobarMailAct(mail) {
    const email = new RegExp(/(^[a-z]+)[@]([a-z]+)\.([a-z]{2,}$)/);
    if(email.test(mail.value)){
        resM.innerHTML= "";
        return true;
    }else if(mail.value.length > 0){
        divE.style.display="flex";
        resM.innerHTML= "No es un email v??lido";
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
         resC.innerHTML= "Las contrase??as es un campo obligatorio";
         return false;
    }
    if(psw1.value!=psw2.value){  
        divC.style.display="flex";
        resC.innerHTML= "Las contrase??as no coinciden";
        return false;
    }

    if (expReg.test(psw1.value)) {
        divC.style.display="none";
        return true;
    }else{
       
        if(!long.test(psw1.value)){
            divC.style.display="flex";
            resC.innerHTML= "La contrase??a debe tener al menos 8 caracteres";
            return false;
        }else if(!mayus.test(psw1.value)){
            divC.style.display="flex";
            resC.innerHTML= "La contrase??a debe incluir al menos una letra may??scula";
            return false;
        }else if(!minusc.test(psw1.value)){
            divC.style.display="flex";
            resC.innerHTML= "La contrase??a debe incluir al menos una letra min??scula";
            return false;
        }else if(!numer.test(psw1.value)){
            divC.style.display="flex";
            resC.innerHTML= "La contrase??a debe incluir al menos un n??mero";
            return false;
        }else if(!especial.test(psw1.value)){
            divC.style.display="flex";
            resC.innerHTML= "La contrase??a debe incluir al menos un caracter especial";
            
            return false;
        }else{
            
        }
        
    }
return false;
}

function comprobarContrasennaAct(psw1, psw2){

    const expReg= /^(?=.*\d)(?=.*[!-+<-@])(?=.*[A-Z])(?=.*[a-z]).{8,}$/;
    const long= new RegExp('.{8,}');
    const mayus= new RegExp('(?=.*[A-Z])');
    const minusc= new RegExp('(?=.*[a-z])');
    const numer=new RegExp('(?=.*[0-9])');
    const especial= new RegExp('(?=.*[*^!-+<-@]+).*');

    if (expReg.test(psw1.value)) {
        if(psw1.value!=psw2.value){  
            divC.style.display="flex";
            resC.innerHTML= "Las contrase??as no coinciden";
            return false;
        }else{
            divC.style.display="none";
            return true;
        }
       
    }else{
       if(psw1.value.length >0){
        if(!long.test(psw1.value)){
            divC.style.display="flex";
            resC.innerHTML= "La contrase??a debe tener al menos 8 caracteres";
            return false;
        }else if(!mayus.test(psw1.value)){
            divC.style.display="flex";
            resC.innerHTML= "La contrase??a debe incluir al menos una letra may??scula";
            return false;
        }else if(!minusc.test(psw1.value)){
            divC.style.display="flex";
            resC.innerHTML= "La contrase??a debe incluir al menos una letra min??scula";
            return false;
        }else if(!numer.test(psw1.value)){
            divC.style.display="flex";
            resC.innerHTML= "La contrase??a debe incluir al menos un n??mero";
            return false;
        }else if(!especial.test(psw1.value)){
            divC.style.display="flex";
            resC.innerHTML= "La contrase??a debe incluir al menos un caracter especial";
            
            return false;
        }else{
            
        }
    }
        
    }
    if(psw1.value!=psw2.value){  
        divC.style.display="flex";
        resC.innerHTML= "Las contrase??as no coinciden";
    }else{
        divC.style.display="none";
    }
return false;
}

function comprobarDirPais(){    
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
            resDir1.innerHTML="No se admiten n??meros";
            return false;
            
         }else{
             divDir1.style.display="none"
             return true;
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
            resDir3.innerHTML="No se admiten n??meros";
            return false;
            
         }else{
             divDir3.style.display="none"
             return true;
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
            resDir4.innerHTML="S??lo se admiten 5 n??meros";
            return false;
         }else{
             divDir4.style.display="none"
             return true;
         }
        }
     
}

function comprobarTarjeta(card,cardN) {
    var visaRegEx = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
    var mastercardRegEx = /^(?:5[1-5][0-9]{14})$/;
    var amexpRegEx = /^(?:3[47][0-9]{13})$/;
    if(cardN.value.length == 0){
        divCard.style.display="none"
        return true
    }
    if(card[0].checked){
        if(!visaRegEx.test(cardN.value)){
            divCard.style.display="inline"
            cn.innerHTML="El n??mero o el tipo de tarjeta no son correctos";
            return false;
        }else{
            divCard.style.display="none"
            return true;
        }
    }
    if(card[1].checked){//comprobacion mastercard
        if(!mastercardRegEx.test(cardN.value)){
            divCard.style.display="inline"
            cn.innerHTML="El n??mero o el tipo de tarjeta no son correctos";
            return false;
        }else{
            divCard.style.display="none"
            return true;
        }
    }
    if(card[2].checked){//comprobacion american express
        if(!amexpRegEx.test(cardN.value)){
            divCard.style.display="inline"
            cn.innerHTML="El n??mero o el tipo de tarjeta no son correctos";
            return false;
        }else{
            divCard.style.display="none"
            return true;
        }
    }
}
function comprobarowner(owner) {
    const number = new RegExp('(?=.*[0-9])');
    const especial= new RegExp('(?=.*[*^!-+<-@]+).*');
    if(owner.value.length == 0){
        divO.style.display="none"
        return true;
    }else{
        if(number.test(owner.value)){
            divO.style.display="inline"
            resO.innerHTML="No se admiten n??meros";
            return false;
            
         }else if(especial.test(owner.value)){
            divO.style.display="flex"
            resO.innerHTML="El nombre de propietario no admite caracteres especiales";
            return false;
             
         }else{
            divO.style.display="none"
             return true;
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
            resCVV.innerHTML="S??lo se admiten 3 n??meros";
            return false;
         }else{
             divCVV.style.display="none"
             return true;
         }
        }
     
}

function comprobardatecard(ayo,mes) {
    var date = new Date(); 
    var month = date.getMonth();
    if(ayo.value == 0){
        if(month <= mes.value){
            divCaducidad.style.display="none";
            return true;
        }else{
            divCaducidad.style.display="flex";
            resCaducidad.innerHTML="La tarjeta est?? caducada"
            return false;
        }
    }else{
        divCaducidad.style.display="none";
        return true;
    }
}


//Proceso para elegir una imagen
var divavatar = document.getElementById("avatar");
var divimagenes = document.getElementById("imagenes");
var avatarP = document.getElementById("avatarP");
divavatar.addEventListener("click",pickimage);



function pickimage() {
    divimagenes.style.display="block";
    
    const myTimeout = setTimeout(activateListener, 100);

function activateListener() {
    body1.addEventListener("click",cerrarImg);  
} 
}
function choose(element) {
    divimagenes.style.display="none";
    var nombre = element.getAttribute("value")
    document.getElementById("nombreImg").value = nombre;
    fotoUsuario = nombre;
    var url = "url('imagenes/" + nombre + "')";
    divavatar.style.backgroundImage = url;
    divavatar.style.backgroundSize= "100% 100%";
    avatarP.innerHTML = "";

}

function cerrarImg() {
    if(divimagenes.style.display = "block"){
        divimagenes.style.display = "none";
    }
    body1.removeEventListener("click",cerrarImg);
    
}


