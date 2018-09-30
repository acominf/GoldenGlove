<?php
require_once(__DIR__ . '/../config.php');

class Database{

	private $cnn = null;
	public $conectado;
	
	public function __construct(){
		$this->conectado = $this->conectar();
	}
	
	private function conectar(){
		$band = true;
		
		mysqli_report(MYSQLI_REPORT_STRICT);//Permite arrojar excepciones personalizadas
		try{
			$this->cnn = new mysqli(SRVDR,USR,PASS,DB);
			
		}catch(Exception $ex){
			$band = false;
			throw new Exception("Error al conectar a la base de datos",30000);
		}
		
		return $band;
	}
	
    public function obtenerPaginaXid($paginaId){
        $res = null;
        
		if($this->conectado){
			try {
				if($res = $this->cnn->prepare('SELECT paginaId,nombre FROM pagina WHERE paginaId = ?')){
					$res->bind_param('i',$paginaId);
					$res->execute();
					$res->store_result();
                    //var_dump($res);
				}
				else {
					echo 'error en la consulta';
				}
			}
			catch(exception $ex){
				echo $ex->message;
			}
		}
	
		return $res;
    }
    
	public function obtenerPagina($pagina){
		$res = null;
        
		if($this->conectado){
			try {
				if($res = $this->cnn->prepare('select paginaId,nombre from pagina WHERE nombre = ?')){
					$res->bind_param('s',$pagina);
					$res->execute();
					$res->store_result();
                    
				}
				else {
					echo 'error en la consulta';
				}
			}
			catch(exception $ex){
				echo $ex->message;
			}
		}
	
		return $res;
	}
	
	public function contenidosPag($pagId){
		$res = null;
		if($this->conectado){
			try {
				if($res = $this->cnn->prepare('SELECT contenidoId,contenido,titulo,orden,fecha FROM contenidos WHERE paginaId = ? ORDER BY orden')){
					$res->bind_param('i',$pagId);
					$res->execute();
					$res->store_result();
				}
				else {
					echo 'error en la consulta';
				}
			}
			catch(exception $ex){
				echo $ex->message;
			}
		}
		
		return $res;
	}
	
	public function insertaContenido($titulo,$cont,$paginaId,$orden){
		$ins = null;
		$success = null;
        
		if($this->conectado){
			if($ins = $this->cnn->prepare('INSERT INTO contenidos(contenido,titulo,paginaId,orden) VALUES(?,?,?,?)')){
				$ins->bind_param('ssii',$cont,$titulo,$paginaId,$orden);
				$success = $ins->execute();
				$ins->close();
			}
            else{
                throw new Exception('Error al preparar la insercion',20000);
            }
		}
        
        return $success;
	}
	
	//Actualiza un contenido especifico
	//$cont -> parametro de tipo Contenido
	public function actualizaContenido($titulo,$contenido,$contenidoId){
		$regAct = 0;
		if($this->conectado){
			if($ins = $this->cnn->prepare('UPDATE contenidos SET contenido = ?,titulo = ? WHERE contenidoId = ?')){
				$ins->bind_param('ssi',$contenido,
										$titulo,
										$contenidoId);
				$ins->execute();
				$regAct = $ins->affected_rows;
				$ins->close();
			}
		}
		
		return $regAct;
	}
	
	public function eliminaContenido($contenidoId){
		$regAct = 0;
		
		if($this->conectado){
			if($ins = $this->cnn->prepare('DELETE FROM contenidos WHERE contenidoId = ?')){
				$ins->bind_param('i',$contenidoId);
				$ins->execute();
				$regAct = $ins->affected_rows;
				$ins->close();
			}
		}
		
		return $regAct;
	}

	function __destruct(){
		$this->cnn->close();
        unset($this->cnn);
	}
}
