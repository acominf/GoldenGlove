<?php
include_once('../clases/usuario.php');
include_once('../config.php');

if($_POST['usr'] == null && $_POST['psw'] == null ){
	header('location:../../login.php');
}
else {
	$usuario = $_POST['usr'];
	$psw = $_POST['psw'];
    
    $us = new usuario();
    $us->consulta($usuario,$psw);
    
    if($us->getUsuario()!= null){
        session_start();
        $_SESSION['usuario'] = $us;
    }
    header('location:../../index.php');
    
}