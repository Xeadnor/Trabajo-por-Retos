<?php 

require_once("modeloLogado.php");

$mod = new modeloLogado();


$d = $mod->recuperar($_POST["usuario"],$_POST["email"]);

if(is_array($d)){
    echo "bien";
}else{
    echo "no";
}