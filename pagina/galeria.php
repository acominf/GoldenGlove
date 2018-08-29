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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
		<title>Golden Glove</title>
	</head>
	<body>
        <div id="fb-root">
        </div>
        <script>
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id))
                  return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
              fjs.parentNode.insertBefore(js, fjs);
            }
             (document, 'script', 'facebook-jssdk'));
        </script>
		<header>
            <?php
            $paginaId = 4;
            include('php\include\headerI.php');/* agrega el menu*/
            ?>
        </header>
        <div class="container-fluid cuerpo">
            <section class="row">
                <div class="col-lg-3 ">
                    <div class="thumbnail">
                        <a href="imagenes/costales.jpg" data-toggle="lightbox">
                            <img src="imagenes/costales.jpg" alt="costales-golden-glove" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="imagenes/Sin%20nombre3.jpg" data-toggle="lightbox">
                            <img src="imagenes/Sin%20nombre3.jpg" alt="costales-golden-glove" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 thumbnail">
                    <div class="thumbnails">
                        <a href="imagenes/img1.jpg" data-toggle="lightbox">
                            <img src="imagenes/img1.png" alt="costales-golden-glove" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 thumbnail">
                    <div class="thumbnails">
                        <a href="imagenes/panoramica1.jpg" data-toggle="lightbox">
                            <img src="imagenes/panoramica1.jpg" alt="costales-golden-glove" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 thumbnail">
                    <div class="thumbnails">
                        <a href="imagenes/costales.jpg" data-toggle="lightbox">
                            <img src="imagenes/costales.jpg" alt="costales-golden-glove" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 thumbnail">
                    <a href="imagenes/costales.jpg" data-toggle="lightbox">
                        <img src="imagenes/costales.jpg" alt="costales-golden-glove" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3 thumbnail">
                    <a href="imagenes/costales.jpg" data-toggle="lightbox">
                        <img src="imagenes/costales.jpg" alt="costales-golden-glove" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3">
                    <div class="thumbnail">
                        <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox">
                            <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid">
                        </a>
                    </div>
                </div>
            </section>
        </div>
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
		<script src="js/jquery.js"></script><!-- CÓDIGO DE BOOTSTRAP -->
		<script src="js/bootstrap.min.js"></script> <!-- CÓDIGO DE BOOTSTRAP -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
        
        <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
        </script>
        
	</body>
</html>