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
        <title>Alta usuario</title>
    </head>
    <body>
        <?php 
            include('php\include\headerI.php');
        ?>
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="col">Alta de usuario</h1>
            </div>
            <form method="POST" action="php/pagina/agregaUsuario.php">
                <div class="row">
                   <div class="form-group col-2">
                        <label for="nombre">Nombre(s):</label>
                        <div>
                            <input class="form-control" name="nombre" type="text" placeholder="Usuario">
                        </div>
                    </div>
                    <div class="form-group col-4 ">
                        <label for="apellidoP">
                            Apellido Paterno:
                        </label>
                        <input class="form-control" name="apellidoP" type="text" placeholder="Apellido Paterno">
                    </div>
                    <div class="form-group col-4 has-error">
                        <label for="apellidoM">
                            Apellido Materno:
                        </label>
                        <input class="form-control" name="apellidoM" type="text" placeholder="Apellido Materno">
                    </div>
                    <div class="form-group col-2">
                        <label for="sexo">
                            Sexo:
                        </label>
                        <select class="form-control">
                            <option>
                                Masculino
                            </option>
                            <option>
                                Femenino
                            </option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-xs-8 col-sm-5 has-error">
                        <label for="direccion">
                            Calle:
                        </label>
                        <input class="form-control" name="dir" type="text" placeholder="Calle">
                    </div>
                    <div class="form-group col-sm-2 has-error">
                        <label for="numero">
                            Número:
                        </label>
                        <input class="form-control" name="numero" type="number" placeholder="#">
                    </div>
                    <div class="form-group col-sm-3 has-error">
                        <label for="colonia">
                            Colonia:
                        </label>
                        <input class="form-control" name="cp" type="text" placeholder="Colonia">
                    </div>
                    <div class="form-group col-xs-3 col-sm-2 has-error">
                        <label for="cp">
                            CP:
                        </label>
                        <input class="form-control" name="cp" type="text" placeholder="C.P">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-3 has-error">
                        <label for="numero">
                            Teléfono:
                        </label>
                        <input class="form-control" name="tel" type="tel" placeholder="Teléfono">
                    </div>
                    <div class="form-group col-3 has-error">
                        <label for="fechaI">
                            Fecha Ingreso:
                        </label>
                        <input class="form-control" name="fechaI" type="date" placeholder="Fecha Ingreso">
                    </div>
                    
                </div>
                <div class="form-group has-error">
                    <label for="fechaI">Activo:</label>
                        <input class="form-control" name="activo" type="checkbox" placeholder="activo">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit" value="Registrar">Alta</button>
                </div>
            </form>
        </div>
            <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
            <script src="js/jquery.js"></script><!-- CÓDIGO DE BOOTSTRAP -->
            <script src="js/bootstrap.min.js"></script> <!-- CÓDIGO DE BOOTSTRAP -->
            <script src="js/popper.min.js"></script>
        
    </body>
</html>