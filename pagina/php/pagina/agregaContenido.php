<?php
require_once '/../nusoap/nusoap.php';

$httpServer='localhost';
$dirWSAdmin='/goldenGlove/';//'
$puerto = ':8080';
$namespace='http://'.$httpServer.$puerto.'/goldenglove/GoldenGlove/pagina/php/servicios/servicios.php';

if($_POST['titulo'] == null && $_POST['contenido'] == null ){
	//header('location:index.html');
	echo 'llenar los campos correctamente';
}
else {
	$titulo = $_POST['titulo'];
	$contenido = $_POST['contenido'];
	$cliente = new nusoap_client($namespace,false);
	$error = $cliente->getError();
	if($error){
		echo 'error al inicializar WS cliente ' . $error;
	}
	$par = array('nombrePag'=>'index','titulo' =>$titulo,'contenido'=>$contenido,'posicion'=>15);
	
	//echo $par['nombrePag'] . ' ' . $par['titulo']. ' ' . $par['contenido']. ' ' . $par['posicion'] ;
	//$cliente->agregaContenido('index',$titulo,$contenido,15);
	$res = $cliente->call('agregaContenido',$par);
	
	echo $res;
}