<?php
include_once('../clases/usuario.php');


if($_POST['usr'] == null && $_POST['psw'] == null ){
	header('location:../../login.php');
}
else {
	$usuario = $_POST['usr'];
	$contenido = $_POST['psw'];
    
    $us = new usuario(1,$usuario,$contenido);

    session_start();
    $_SESSION['usuario'] = $us;
    header('location:../../index.php');
}
