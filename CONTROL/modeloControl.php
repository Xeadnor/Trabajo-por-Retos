<?php

require_once("MODELO/modeloRegistro.php");
require_once("MODELO/modeloLogado.php");
require_once("usuario.php");
class modeloControl {
    
    
    static public function Registro() {
        $mod = new modeloRegistro();
        $usuario = new Usuario($_POST["nick"],$_POST["email"],$_POST["nombreImg"],1);
        $pass = $_POST["password"];
        $info = array(
          "nombre" => array ("value" => $_POST["nombre"]),
          "apellidos" => array ("value" => $_POST["apellidos"]),
          "cumple" => array ("value" => $_POST["cumple"]),
          "sexo" => array ("value" => $_POST["sexo"]),
          "dir1" => array ("value" => $_POST["dir1"]),
          "dir2" => array ("value" => $_POST["dir2"]),
          "dir3" => array ("value" => $_POST["dir3"]),
          "dir4" => array ("value" => $_POST["dir4"]),
          "pais" => array ("value" => $_POST["pais"]),
          "owner" => array ("value" => $_POST["owner"]),
          "cvv" => array ("value" => $_POST["cvv"]),
          "cardNumber" => array ("value" => $_POST["cardNumber"]),
          "mesCaducidad" => array ("value" => $_POST["mesCaducidad"]),
          "añoCaducidad" => array ("value" => $_POST["añoCaducidad"]),
          "tipotarjeta" => array ("value" => $_POST["tipotarjeta"]),
          "notificaciones" => array ("value" => $_POST["notificaciones"]),
          "newsletter" => array ("value" => $_POST["newsletter"])
            
        );
        $mod->insertarUsuario($usuario);
        $mod->insertarContraseña($pass);
        $mod->insertarInfo($info);
    }

    static public function validar(){
        $mod = new modeloRegistro();
        $counter = $mod->duplicado($_POST["email"]);
        $counterU = $mod->duplicadoUser($_POST["nick"]);

        if($counter == 1 && $counterU == 1){
            return 1;
        }else if($counterU == 1 && $counter == 0){
            return 2;
        }else if($counterU == 0 && $counter == 1){
            return 3;
        }else{
            return 0;
        }
    
        
    }

    static public function logado(){
        $mod = new modeloLogado();
        $counter = $mod->logado($_POST["nick"],$_POST["clave"]);
        return $counter;

    }
    static public function datos(){
        $mod = new modeloLogado();
        $info = $mod->datos($_POST["nick"]);
        return $info;

    }

    static public function recuperacion($nick,$correo){
        $mod = new modeloLogado();
        return $mod->recuperar($nick,$correo);
        
        

    }
}