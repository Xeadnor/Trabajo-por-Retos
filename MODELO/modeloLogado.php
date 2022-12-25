<?php

require_once("Conexion.php");

class modeloLogado {
    private $conexion;
  
    public function __construct(){
        $this->conexion = Conexion::conectar();
    }


    public function logado ($nombre,$password){
       
        $sql = "SELECT COUNT(*) FROM usuario WHERE usuario.nick = '$nombre' ";
        $stm = $this->conexion->prepare($sql);
        $stm->execute();
        $result = $stm->get_result();
        foreach ($result as $row){
              
            $num = ($row["COUNT(*)"]);
            }

        $sql2 = "SELECT COUNT(*) FROM pswd P INNER JOIN usuario U on U.id = P.id WHERE password = '$password' and U.nick =  '$nombre'";
        $stm = $this->conexion->prepare($sql2);
        $stm->execute();
        $result2 = $stm->get_result();
        foreach ($result2 as $row2){
              
            $num2 = ($row2["COUNT(*)"]);
            }

        if($num == 1 && $num2 == 1){
            return 1;
        }else{
            return 0;
        }

    }

    public function datos ($nombre){
        $datos = array();
        $sql = "SELECT email, imagen, idTipo FROM usuario WHERE usuario.nick = '$nombre' ";
        $stm = $this->conexion->prepare($sql);
        $stm->execute();
        $result = $stm->get_result();
        $i = 0;
        foreach ($result as $row){
              
            $datos[$i] = $row;
            }

        return $datos[0];
    } 

    public function recuperar($usuario,$email){
        $sql = "SELECT COUNT(*) FROM usuario WHERE usuario.nick = '$usuario' ";
        $stm = $this->conexion->prepare($sql);
        $stm->execute();
        $result = $stm->get_result();
        foreach ($result as $row){
              
            $num = ($row["COUNT(*)"]);
            }

        $sql2 = "SELECT COUNT(*) FROM usuario  WHERE usuario.email = '$email'";
        $stm = $this->conexion->prepare($sql2);
        $stm->execute();
        $result2 = $stm->get_result();
        foreach ($result2 as $row2){
              
            $num2 = ($row2["COUNT(*)"]);
            }

        if($num == 1 && $num2 == 1){
            $sql3 = "SELECT P.password FROM pswd P INNER JOIN usuario U on U.id = P.id WHERE U.nick = '$usuario'";
            $stm = $this->conexion->prepare($sql3);
            $stm->execute();
            $result3 = $stm->get_result();
            foreach ($result3 as $row){
              
                $datos2 = $row;
                }
    
            return $datos2;
        }else{
            return 0;
        }

    }


}