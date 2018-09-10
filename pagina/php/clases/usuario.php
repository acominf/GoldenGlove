<?php

class usuario{
    private $usuarioId;
    private $usuario;
    private $psw;
    
    
    public function __construct($usuarioId,$usuario,$psw){
        $this->usuarioId = $usuarioId;
        $this->usuario = $usuario;
        $this->psw = $psw;
    }
    
    public function getUsuario(){
        return $this->usuario;
    }
    

}