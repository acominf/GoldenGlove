<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- CÓDIGO DE BOOTSTRAP 
		<meta name="viewport" content ="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0"> 
        -->
        <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
		<!-- CÓDIGO DE BOOTSTRAP --> 
        <link rel="stylesheet" href="css/bootstrap.css"> 
		<link rel="stylesheet" href="css/general.css">
        <script src="js/funciones.js"></script>
		<title>Golden Glove</title>
	</head>
	<body>
      <?php
            include(__DIR__ . '/php/clases/Pagina.php');
            include(__DIR__ . '/php/clases/Usuario.php');/* agrega la clase usuario*/
            include_once(__DIR__ . "/php/config.php"); /*agrega los datos de configuración*/
            include_once('formContenido.php');
            session_start();
            $usuario;
            $paginaId = 2;
            $pagina = new Pagina($paginaId);
            if(isset($_SESSION['usuario'])){
                $usuario = $_SESSION['usuario'];
            if(isset($_SESSION['pagina'])) //Para cuando se actualizan o 
                unset($_SESSION['pagina']);
            }
            $_SESSION['pagina'] = $pagina;
            
            include(__DIR__ . '/php/include/headerI.php');/* agrega el menu*/
        ?>
        <div class="container-fluid cuerpo">
           <div class="row">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregaContenido" onclick="agregaCont()">
                  Agrega contenido
                </button>
           </div>
            <section class="row">
                <aside class="d-none d-md-block col-md-2 col-lg-2 aside">
                    <nav>
                    <?php
                        foreach($pagina->getContenidos() as $contenido){ ?>
                            <h2> 
                                <a  href = "#E<?php echo $contenido->getContenidoId() ?> "> 
                                    <?php echo $contenido->getTitulo() ?> 
                                </a>
                            </h2>
                        <?php } ?>
                    </nav>
                </aside>
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
                    <?php 
                        foreach($pagina->getContenidos() as $contenido){ ?>
                            <div class="row" id="E<?php echo $contenido->getContenidoId() ?>">
                                <h2 class="col-11">
                                    <?php echo $contenido->getTitulo() ?>  
                                </h2>
                                <button class="btn btn-secondary btn-sm col-1" type="button" onclick="actualizaCont(<?php echo $contenido->getContenidoId() ?>)"  data-toggle="modal" data-target="#modalAgregaContenido" >
                                    actualiza
                                </button>
                                <p> 
                                    <?php  echo nl2br($contenido->getContenido()) ?> 
                                </p>
                            </div>
                        <?php 
                        } ?>
                        
                    <!-- </div> -->
                </div>
                <aside class=" d-none d-sm-block col-sm-5 col-md-3 col-lg-3">
                    <div class="fb-page" 
                        data-tabs="timeline,events,messages"
                        data-href="https://www.facebook.com/goldengloveboxingclub"
                        data-width="385" 
                        data-hide-cover="false">
                    </div>
                </aside>
            </section>
        </div>
		
        <div id="fb-root">
        </div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) 
                    return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1&appId=764073483692061&autoLogAppEvents=1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
		<script src="js/jquery.js"></script><!-- CÓDIGO DE BOOTSTRAP -->
		<script src="js/bootstrap.min.js"></script> <!-- CÓDIGO DE BOOTSTRAP -->
        <script src="js/popper.min.js"></script>
	</body>
</html>