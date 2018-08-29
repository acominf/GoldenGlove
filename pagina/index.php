<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- CÓDIGO DE BOOTSTRAP -->
		<meta name="viewport" content ="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0"> 
		<!-- CÓDIGO DE BOOTSTRAP -->
		<link rel="stylesheet" href="css/bootstrap.min.css"> 
		<link rel="stylesheet" href="css/general.css">
		<title>Golden Glove</title>
	</head>
	<body>
        <?php
            $paginaId = 1;
            $cantContenidosXpag = 3;
            $pagina = '';
            if(isset($_GET["pagina"])){
                $pagina = $_GET["pagina"];
            }
            else{
                $pagina = 1;
                header('location:index.php?pagina=1');
            }
        ?>
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
		<?php 
            include('php\include\headerI.php');/* agrega el menu*/
            include_once("/php/config.php"); /*agrega los datos de configuración*/

            mysqli_report(MYSQLI_REPORT_STRICT);//Permite arrojar excepciones personalizadas
            try{
                $cnn = new mysqli(SRVDR,USR,PASS,DB);
            }catch(Exception $ex){
                echo "Error al conectar a la base de datos";
            }

            try {
                if($res = $cnn->prepare("SELECT COUNT(*) FROM contenidos WHERE paginaId = ?")){
                    $res->bind_param('i',$paginaId);
                    $res->execute();
                    $res->bind_result($numContenidos);
                    $res->fetch();
                    $res->free_result();
                    $res->close();
                }
                else{
                    echo 'Error en la consulta';
                }
            }
            catch(exception $ex){
                echo $ex->message;
            }
            $numPag = ceil($numContenidos / $cantContenidosXpag);
        ?>
        <div class="container-fluid cuerpo">
            <section class="row">
                <aside class="hidden-xs hidden-sm col-md-2 col-lg-2 aside">
                    <nav>
                    <?php
                        $start = ($pagina-1) * $cantContenidosXpag;
                        if($res = $cnn->prepare('SELECT contenidoId,contenido,titulo FROM contenidos WHERE paginaId = ? ORDER BY orden DESC LIMIT ? , ?')){
                            $res->bind_param('iii',$paginaId,$start,$cantContenidosXpag);
                            $res->execute();
                            $res->store_result();
                            $res->bind_result($contenidoId,$contenido,$titulo);
                        }
                        else {
                            echo 'error en la consulta';
                        }
                    while ($res->fetch()){ ?>
                            <h2> 
                                <a href = "#E<?php echo $contenidoId ?> "> 
                                    <?php echo $titulo ?> 
                                </a>
                            </h2>
                    <?php    } ?>
                    </nav>
                </aside>
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
                    <?php
                        $res->data_seek(0);
                        while ($res->fetch()) { ?>
                            <h2 id="E<?php echo $contenidoId ?>"> <?php echo $titulo ?> </h2>
                            <p> <?php echo $contenido ?> </p>
                    <?php    }
                        $res->free_result();
                        $res->close();
                    ?>
                   <!--< <div > -->
                        <nav aria-label="..." style="text-align: center">
                            <ul class="pagination">
                                <li class="page-item <?php echo $pagina <= 1 ? 'disabled' : '' ?>">
                                    <a class="page-link" tabindex="-1" href="index.php?pagina=<?php echo $pagina - 1; ?>">
                                        Anterior<!--&laquo;-->
                                    </a>
                                </li>
                                <?php
                                    for($i=1;$i<= $numPag;$i++){ ?>
                                        <li class = "page-item <?php echo $pagina==$i ? 'active' : '' ?>">
                                            <a class="page-link" href="index.php?pagina=<?php echo $i ?> ">
                                                <?php echo $i ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                              <!--  <li>
                                     <a href ="index.php?pagina=2">
                                        2
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php?pagina=3">
                                        3
                                    </a>
                                </li>
                              -->
                                <li class="page-item <?php echo $pagina>=$numPag ? 'disabled' : '' ?>">
                                    <a class="page-link" tabindex="-1" href="index.php?pagina=<?php echo $pagina + 1; ?>">
                                        Siguiente<!--&raquo; -->
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    <!-- </div> -->
                </div>
                <aside class=" hidden-xs col-sm-5 col-md-3 col-lg-3">
                    <div class="fb-page" 
                        data-tabs="timeline,events,messages"
                        data-href="https://www.facebook.com/goldengloveboxingclub"
                        data-width="385" 
                        data-hide-cover="false">
                    </div>
                </aside>
            </section>
        </div>
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
		<script src="js/jquery.js"></script><!-- CÓDIGO DE BOOTSTRAP -->
		<script src="js/bootstrap.min.js"></script> <!-- CÓDIGO DE BOOTSTRAP -->
	</body>
</html>