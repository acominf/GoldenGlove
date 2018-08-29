<?php
include_once("/php/config.php");

mysqli_report(MYSQLI_REPORT_STRICT);//Permite arrojar excepciones personalizadas
try{
    $cnn = new mysqli(SRVDR,USR,PASS,DB);

}catch(Exception $ex){
    echo "Error al conectar a la base de datos";
}

try {
      if($res = $cnn->prepare("SELECT COUNT(contenidoId) FROM contenidos WHERE paginaId = ?")){
                    $paginaId = 1;
                    $res->bind_param('i',$paginaId);
                    $res->execute();
                    $res->store_result();
                    $res->bind_result($numContenidos);
                    $res->fetch();
                    $res->free_result();
                    $res->close();
      }
    /*
    if($res = $cnn->prepare('SELECT contenidoId,contenido,titulo,orden FROM contenidos WHERE paginaId = ? ORDER BY orden')){
        $param = 1;
        $res->bind_param('i',$param);
        $res->execute();
        $res->store_result();
        $res->bind_result($contenidoId,$contenido,$titulo,$orden);
        while ($res->fetch()){
				 echo '<div> contenidoId' . $contenidoId . ' titulo ' . $titulo . ' contenido ' . $contenido . ' orden ' . $orden . '</div>';
			}
			$res->free_result();
			$res->close();
    }
    else {
        echo 'error en la consulta';
    }
    */
}
catch(exception $ex){
    echo $ex->message;
}
?>

