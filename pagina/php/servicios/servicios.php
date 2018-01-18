<?php

require_once '/../clases/pagina.php';
require_once '/../nusoap/nusoap.php';

$httpServer='localhost';
$dirWSAdmin='/goldenGlove/';
$namespace='urn:http://'.$httpServer.'/'.$dirWSAdmin.'/GoldenGlove/pagina/php/servicios/servicios.php';
$valido = true;

if(empty($httpServer)){
	$valido = false;
	throw new Exception('El nombre del servidor no se encuentra definido',2000001);
}
if(empty($dirWSAdmin)){
	$valido =false;
	throw new Exeption('El nombre del directorio no se encuetra definido',2000002);
}
if($valido){

	$server = new soap_server();
	$server->configureWSDL("prueba", $namespace);
	
	$server->register('prueba',
			array('categoria' => 'xsd:string'),
			array('return' => 'xsd:string'),
			$namespace,
			'#prueba',
			'rpc',
			'encoded',
			'hace una prueba de funcionamiento');

	$server->register('agregaContenido',
			array('nombrePag' => 'xsd:string',
					'titulo' => 'xsd:string',
					'contenido' => 'xsd:string',
					'posicion' => 'xsd:int'),
			array('return ' => 'xsd:int'),
			$namespace,
			'#agregaContenido',
			'rpc',
			'encoded',
			'Inserta un contenido en una pagina');
			
	$POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : '';
	$server->service($POST_DATA);
			
			
}

function prueba($categoria){
	$ret = 'jja';
	
	if($categoria == 'prueba'){
		$ret = 'Esta es una prueba existosa';
	}
	else{
		$ret = 'No pertenece a una categoria prueba';
	}
	
	return $ret;
}

function agregaContenido($nombrePag,$titulo,$contenido,$posicion){
	$pag = new Pagina();

	$pag->consultaPagina($nombrePag);

	$pag->agregaCon($titulo,$contenido,$posicion);
	
	return $pag->getPaginaId();
}
/*
class servicios{
	
	
}
*/


/*
$pag = new Pagina();

$pag->consultaPagina('entrenamiento');
echo $pag->getPaginaId() . ' ';
echo $pag->getNombre() . '<br/><br/>';
 foreach($pag->getContenidos() as $c){
 	echo $c->getContenidoId() . ' ' .$c->getContenido() .' ' . $c->getTitulo() . ' ' . $c->getOrden();
 	echo '<br/><br/>';
 }
 
 echo '<br/><br/><br/><br/>';
 $pag->agregaContenido('prueba5','esta es otra insercion desde php',7);
 foreach($pag->getContenidos() as $c){
 	echo $c->getContenidoId() . ' ' .$c->getContenido() .' ' . $c->getTitulo() . ' ' . $c->getOrden();
 	echo '<br/><br/>';
 }
 */
 