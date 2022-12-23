<?php 

require_once("Conexion.php");

class modeloRegistro {
  
    private $tabla;
    private $conexion;
  
    public function __construct(){
        $this->tabla = "usuario";
        $this->conexion = Conexion::conectar();
    }
    
     public function insertarUsuario($usuario) {
    $sql = "INSERT INTO " . $this->tabla . " (nick,email,imagen,idTipo)  VALUES (?,?,?,?)";
    $stm = $this->conexion->prepare($sql);
    $stm->bind_param("sssi",$usuario->getNick(),$usuario->getemail(),$usuario->getImagen(),$usuario->getidTipo());
    $stm->execute();
    }

    public function insertarContraseña($contraseña){
        $sql = "INSERT INTO pswd (id,password) VALUES (?,?)";
    $stm = $this->conexion->prepare($sql);
    $stm->bind_param("is",$this->generarIDcontraseña(),$contraseña);
    $stm->execute();
    }

    public function insertarInfo($info){ //FALTA RELLENAR ESTE PARA QUE SEA MODULAR, LE PASO ARRAY
        $campos = "";
        $valores = "(?, ";
        $i = 0;
        $sql = "INSERT INTO info (id, ";
        foreach ($info as $key => $value) {
            $campos .= $key . ",";
            if(is_null($value)){  
                $valores.="?, ";
                $param[$i++]=null;
            }else{
                $valores.="?, ";
                $param[$i++]=$value;
            }
        }
        $campos=substr_replace($campos, ")", strlen($campos)-1);
        $valores=substr_replace($valores, ")", strlen($valores)-2);

        $sql.= $campos . " VALUES " . $valores;
    $stm = $this->conexion->prepare($sql);
    $stm->bind_param("isssssssssssssssss",$this->generarIDcontraseña(),$info["nombre"]["value"],
    $info["apellidos"]["value"], $info["cumple"]["value"],
    $info["sexo"]["value"],$info["dir1"]["value"],$info["dir2"]["value"],$info["dir3"]["value"],
    $info["dir4"]["value"],$info["pais"]["value"],$info["owner"]["value"],$info["cvv"]["value"],
    $info["cardNumber"]["value"],$info["mesCaducidad"]["value"],$info["añoCaducidad"]["value"],
    $info["tipotarjeta"]["value"],$info["notificaciones"]["value"],$info["newsletter"]["value"]);
    $stm->execute();
    }

    public function generarIDcontraseña(){
        $sql = "SELECT id FROM " . $this->tabla . " WHERE 1";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $max = 0;
        foreach ($result as $row) {
          $num = (int)$row["id"];
          if($num > $max){
              $max = $num;
          }
        }
        return $max;
    }

    public function duplicado($email){
        $sql = "SELECT COUNT(*) FROM usuario WHERE usuario.email = ? ";
        $stm = $this->conexion->prepare($sql);
        $stm->bind_param("s",$email);
        $stm->execute();
        $result = $stm->get_result();
        foreach ($result as $row){
              
        $num = ($row["COUNT(*)"]);
        }
       return $num;
    }

    public function duplicadoUser($nick){
        $sql = "SELECT COUNT(*) FROM usuario WHERE usuario.nick = ? ";
        $stm = $this->conexion->prepare($sql);
        $stm->bind_param("s",$nick);
        $stm->execute();
        $result = $stm->get_result();
        foreach ($result as $row){
              
        $num = ($row["COUNT(*)"]);
        }
       return $num;
    }
}