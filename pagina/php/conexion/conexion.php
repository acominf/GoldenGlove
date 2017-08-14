<?php
require_once('/../config.php');

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
				if($res = $this->cnn->prepare('SELECT contenidoId,contenido,titulo,orden FROM contenidos WHERE paginaId = ? ORDER BY orden')){
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
	
	public function insertaContenido($cont,$titulo,$paginaId,$orden){
		$ins = null;
		$idInsertado = 0;
		
		
		if($this->conectado){
			if($ins = $this->cnn->prepare('INSERT INTO contenidos(contenido,titulo,paginaId,orden) VALUES(?,?,?,?);')){
				echo 'INSERTANDO... ' . $cont . ' ' . $titulo . ' ' . $paginaId . ' ' . $orden;
				$ins->bind_param('ssii',$cont,$titulo,$paginaId,$orden);
				echo $idInsertado;
				$ins->execute();
				$ins->close();
			}
		}
	}
	
	//Actualiza un contenido especifico
	//$cont -> parametro de tipo Contenido
	public function actualizaContenido($cont){
		$regAct = 0;
		
		if($this->conectado){
			if($ins = $this->cnn->prepare('UPDATE contenidos SET contenido = ?,titulo = ?,paginaId = ?,orden = ? WHERE contenidoId = ?')){
				$ins->bind_param('ssiii',$cont->get_contenido(),
										$cont->get_titulo(),
										$cont->get_paginaId(),
										$cont->get_orden(),
										$cont->get_contenidoId());
				$ins->execute();
				$regAct = $ins->affected_rows;
				$ins->close();
			}
		}
		
		return $regAct;
	}

	function __destruct(){
		$this->cnn->close();
	}
}
