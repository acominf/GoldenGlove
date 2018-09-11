<?php
require_once('../clases/usuario.php');

var_dump($_POST['sexo']);

if($_POST['nombre'] == null && $_POST['apellidoP'] == null && $_POST['apellidoM'] == null && $_POST['sexo'] == null && $_POST['mail']){
	header('location:../../login.php');
}
else{
	$usuario = $_POST['usr'];
	$contenido = $_POST['psw'];
    
    $us = new usuario(1,$usuario,$contenido);

    session_start();
    $_SESSION['usuario'] = $us;
    header('location:../../index.php');
}
