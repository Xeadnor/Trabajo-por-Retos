<?php 
session_start();
ini_set('display_errors', 0);

ini_set('display_startup_errors', 0);
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
 
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado


require_once("CONTROL/modeloControl.php");
$method = $_SERVER["REQUEST_METHOD"];
$error = 3;
require_once("MODELO/modeloLogado.php");


if($method == "GET"){
    require_once("VISTA/home.php");

    if(isset($_GET["logout"])){
        if($_GET["logout"] =="0"){
            require_once("VISTA/home.php");
        }
}
}

if($method == "POST"){    
    if(isset($_POST["btnregistro"])){
        $existe = modeloControl::validar();
        if($existe == 0){
            modeloControl::Registro();
            require_once("VISTA/home.php");
        }else if ($existe == 1) { // NICK Y EMAIL USADOS
            $_SESSION["Registro"] = $_POST;
            header("Location:VISTA/landing.php?error=0"); 
        }else if ($existe == 2) { // SOLO  NICK USADO
            $_SESSION["Registro"] = $_POST;
            header("Location:VISTA/landing.php?error=1"); 
        }else if ($existe == 3) { //SOLO EMAIL USADO
            $_SESSION["Registro"] = $_POST;
            header("Location:VISTA/landing.php?error=2"); 
        }
    }
    

    if(isset($_POST["btningresar"])){
        $login = modeloControl::logado();
        if($login == 1){
            session_destroy();
            session_start();
            $error = 1;
            $info = modeloControl::datos();
            $_SESSION["nick"] = $_POST["nick"];
            $_SESSION["avatar"] = $info["imagen"];
            $_SESSION["correo"] = $info["email"];
            $_SESSION["tipo"] =  $info["idTipo"];
            header("Location:Index.php");
            require_once("VISTA/home.php");
        }else if($login == 0){
            $_SESSION["errorLogado"] = $_POST["error"];
            require_once("VISTA/home.php");
        }
       

    }
    

    if(isset($_POST["btnRecuperar"])){
        session_destroy();
        session_start();
        $usuario = $_POST["usuario"];
        $email = $_POST["email"];
        $mod = new modeloLogado();
        $result = $mod->recuperar($_POST["usuario"],$_POST["email"]); //CHECKEAR ESTO
       $error = 3;
            if(is_array($result)){
                $error = 0;
                $pass = $result["password"];
                require_once("recuperarP.php");
            }else{
                $error = 1;
                require_once("recuperarP.php");
            }
    
    }




}










           