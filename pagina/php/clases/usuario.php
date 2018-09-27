<?php

class Usuario{
    public $usuarioId;
    private $nombre;
    private $apellidoMat;
    private $apellidoPat;
    private $sexo;
    private $correo;
    private $calle;
    private $numeroInt;
    private $cp;
    private $colonia;
    private $estado;
    private $telefono;
    private $fechaIng;
    private $usuario;
	private $psw;
    private $activo;
    private $tipoUsuarioId;
    private $fechaAlta;
    
    
    public function __construct(){
    }
    
    public function getUsuario(){
        return $this->usuario;
    }
    
    public function consulta($usuario,$psw){
        
        
        try {
            mysqli_report(MYSQLI_REPORT_STRICT);
            $cnn = new mysqli(SRVDR,USR,PASS,DB);
            if($consulta = $cnn->prepare('select * from usuario WHERE usuario = ? and psw = ? LIMIT 1')){
                $consulta->bind_param('ss',$usuario,$psw);
                $consulta->execute();
                $res = $consulta->get_result();
                $fila = $res->fetch_assoc();
                $this->usuarioId = $fila['usuarioId'];
                $this->nombre = $fila['nombre'];
                $this->apellidoMat = $fila['apellidoMat'];
                $this->apellidoPat = $fila['apellidoPat'];
                $this->sexo = $fila['sexo'];
                $this->correo = $fila['mail'];
                $this->calle = $fila['calle'];
                $this->numeroInt = $fila['numeroInt'];
                $this->cp = $fila['cp'];
                $this->colonia = $fila['colonia'];
                $this->estado = $fila['estado'];
                $this->telefono = $fila['telefono'];
                $this->fechaIng = $fila['fechaIng'];
                $this->usuario = $fila['usuario'];
                $this->psw = $fila['psw'];
                $this->activo = $fila['activo'];
                $this->tipoUsuarioId = $fila['tipoUsuarioId'];
                $this->fechaAlta = $fila['fechaAlta'];
                $consulta->free_result();
                $consulta->close();
            }
            else {
                echo 'error en la consulta';
            }
        }
        catch(exception $ex){
            echo $ex->message;
        }
    }
    
    public function esAdmin(){
        return $this->tipoUsuarioId == 1;
    }



}