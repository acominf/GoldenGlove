<?php
require_once '/../nusoap/nusoap.php';

$httpServer='localhost';
$dirWSAdmin='/goldenGlove/';
$namespace='http://'.$httpServer.'/'.$dirWSAdmin.'/GoldenGlove/pagina/php/servicios/servicios.php';

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
	
	$cliente->servicioagregaContenido('index',$titulo,$contenido,15);
	//$res = $cliente->call('servicioagregaContenido',$par);
	
	echo $res;
}