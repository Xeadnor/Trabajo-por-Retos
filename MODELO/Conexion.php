<?php

class Conexion {
    const hostname="localhost";
    const usuario="Marblo";
    const password="devega";
    const basededatos="frikisetas";
    
 
    
   static  public function conectar(){
        return new mysqli(self::hostname,self::usuario, self::password, self::basededatos);
    }

}
