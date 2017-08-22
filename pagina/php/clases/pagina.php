<?php

require_once '/../conexion/conexion.php';
require_once 'contenidos.php';

class Pagina{
	private $paginaId;
	private $nombre;
	private $contenidos;
	
	public function __contructor2($nombrePag){
		$this->consultaPagina($nombrePag);
	}
	
	public function consultaPagina($pagina){
		$res = null;
		
		try{
			$db = new Database();
		}
		catch(exception $ex){
			echo $ex->getMessage();
		}
		if($db->conectado){
			$res = $db->obtenerPagina($pagina);
			$res->bind_result($paginaId,$nombre);
			if($res->fetch()){
				$this->paginaId = $paginaId;
				$this->nombre = $nombre;
				$this->consultaContenido();
			}
			else{
				echo 'nada que mostrar';
			}
			$res->free_result();
			$res->close();
		}
		$db = null;
	}
	
	public function consultaContenido()
	{
		$res = null;
		$db = new Database();
		
		if($db->conectado){
			$this->contenidos = array(); //Inicializa un arreglo nuevo
			$res = $db->contenidosPag($this->paginaId);
			$res->bind_result($contenidoId,$contenido,$titulo,$orden);
			while ($res->fetch()){
				 $contenido = new Contenido($contenidoId,$titulo,$contenido,$orden);
				 $this->contenidos[] = $contenido;
			}
			$res->free_result();
			$res->close();
		}
		$db = null;
	}
	
	public function agregaCon($titulo,$contenido,$orden){
		
		$db = new Database();
		$id = 0;
		$contForm  = nl2br($contenido);
		if($db->conectado){
			if(!empty($this->paginaId)){
				$db->insertaContenido($contForm,$titulo,$this->paginaId,$orden);
				//$this->consultaContenido();
			}
		}
		$db = null;
		
	}
	
	public function getPaginaId(){
		
		return $this->paginaId;
	}
	
	public function getNombre(){
	
		return $this->nombre;
	}
	
	//Regresa un arreglo de objetos de la clase Contenido
	public function getContenidos(){
		
		return $this->contenidos;
	}
}