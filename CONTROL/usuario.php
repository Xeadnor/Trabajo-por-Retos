<?php


class Usuario {
    private $id;
    private $nick;
    private $email;
    private $imagen;
    private $idTipo;
    
    public function __construct($nick, $email, $imagen, $idTipo, $id=null) {
        $this->id = $id;
        $this->nick = $nick;
        $this->email = $email;
        $this->imagen = $imagen;
        $this->idTipo = $idTipo;
    }

    public function getId() {
        return $this->id;
    }

    public function getNick() {
        return $this->nick;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getidTipo() {
        return $this->idTipo;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNick($nick): void {
        $this->nick = $nick;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setidTipo($idTipo): void {
        $this->idTipo = $idTipo;
    }

    public function setImagen($imagen): void {
        $this->imagen = $imagen;
    }
    



}