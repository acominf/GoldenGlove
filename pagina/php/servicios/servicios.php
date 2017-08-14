<?php

require_once '/../clases/contenidos.php';
require_once '/../clases/pagina.php';

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
 
 