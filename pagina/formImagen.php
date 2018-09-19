<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- CÓDIGO DE BOOTSTRAP 
		<meta name="viewport" content ="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0"> 
        -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- CÓDIGO DE BOOTSTRAP -->
		<link rel="stylesheet" href="css/bootstrap.min.css"> 
		<link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="css/formulario.css">
        <title>Subir imagen</title>
    </head>
    <body>
        <?php
            include('php\clases\usuario.php');/* agrega la clase usuario*/
            include('php/include/headerI.php') 
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-1">
                    <h1>Subir imagen</h1>
                </div>
            </div>
            <form class ="form-horizontal" method="POST" action="php/pagina/subirImagen.php">
                <div class="form-row">
                    <div class="form-group">
                        <label class="control-label col-xs-1 col-sm-1 col-md-1 col-xl-1" for="Imagen:">
                            Elije una imagen: 
                        </label>
                        <div class=" col-xs-11 col-sm-5 col-md-7 col-xl-7">
                            <input class="btn" id="file" type="file" name="imagen">
                        </div>
                    </div>
                </div>
                    <div class="form-row">
                        <div class="form-group vistaPrevia">
                            <label class="control-label col-xs-1 col-sm-1 col-sm-1 col-md-1 col-xl-1"> Vista previa:</label>
                            <img class="col-xs-3 col-sm-2 col-md-1 col-lg-2" src="#" id="vistaPrev" alt="" class="img-fluid img-thumbnail">
                        </div>
                    </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-1 col-md-1 col-xl-1" for="titulo">Titulo:</label>
                    <div class="col-xs-12 col-sm-11 col-md-11 col-xl-11">
                        <input class="form-control" name="titulo" type="text" placeholder="Titulo de la imágen:">
                    </div>
                </div>
                <div class="form-group has-error">
                    <label class="control-label col-xs-12 col-sm-1 col-md-1 col-lg-1" for="contenido">descripción:</label>
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-11 col-md-offset-0 col-lg-11">
                        <textarea class="form-control" rows="10" name="contenido" placeholder="descripción de la imágen"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-2 col-sm-offset-6">
                        <button class="btn btn-success" type="submit">Subir</button>
                    </div>
                </div>
            </form>
            <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
            <script src="js/jquery.js"></script><!-- CÓDIGO DE BOOTSTRAP -->
            <script src="js/bootstrap.min.js"></script> <!-- CÓDIGO DE BOOTSTRAP -->
            <script src="js/popper.min.js"></script>
            
            <script>
                $(function(){
                    $("#file").change(function(){
                        var reader = new FileReader();
                        
                        reader.onload = function(image){
                            $('.vistaPrevia').show(0);
                            $('#vistaPrev').attr('src',image.target.result);
                            console.log(image.target.result);
                        }
                        reader.readAsDataURL(this.files[0]);
                    });
                });
            </script>
        </div>    
    </body>
</html>