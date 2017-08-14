<?php
require_once '/../conexion/conexion.php';

class Contenido{
	private $contenidoId;
	private $titulo;
	private $contenido;
	private $orden;

	public function __construct($contenidoId,$titulo,$contenido,$orden){
		$this->contenidoId = $contenidoId;
		$this->contenido = $contenido;
		$this->titulo = $titulo;
		$this->orden = $orden;
	}
	
	public function __construct2($titulo,$contenido,$orden){
		$this->contenido = $contenido;
		$this->titulo = $titulo;
		$this->orden = $orden;
	}
	
	public function actualizaContenido(){
		$db;
		$cantAct = 0;
		
		if(!empty($this->contenidoId)){
			$db = new Database();
			if($db->conectado){
				$cantAct = $db->actualizaContenido($this);
			}
		}
		else{
			throw new Exception('No existe una referencia para esta entrada',10000);
		}
		
		$db = null;
		
		return $cantAct;
	}
	
	public function getContenido(){
		
		return $this->contenido;
	}
	
	public function getTitulo(){
		
		return $this->titulo;
	}
	
	public function getOrden(){
		
		return $this->orden;
	}
	
	public function getContenidoId(){
		
		return $this->contenidoId;
	}
	
}