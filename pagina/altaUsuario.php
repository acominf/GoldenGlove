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
            include('php\clases\usuario.php');/* agrega la clase usuario*/
            include_once('php\include\headerI.php');
        ?>
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="">Alta de usuario</h1>
            </div>
            
            <form method="POST" action="php/pagina/altaUsuario.php">
                <div class="card">
                       <div class="card-header">
                           Datos Personales
                       </div>
                       <div class="card-body">
                           <div class="form-row">
                               <div class="form-group col-md-2 offset-md-1">
                                <label for="nombre">Nombre(s):</label>
                                <input class="form-control is-invalid" name="nombre" type="text" id="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <label for="apellidoP">
                                    Apellido Paterno:
                                </label>
                                <input class="form-control is-valid" name="apellidoP" id="apellidoP" type="text" placeholder="Apellido Paterno">
                                <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <label for="apellidoM">
                                    Apellido Materno:
                                </label>
                                <input class="form-control" name="apellidoM" type="text" placeholder="Apellido Materno">
                                <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-5 col-md-2 offset-md-1">
                                <label for="sexo">
                                        Sexo:
                                </label>
                                <select class="form-control" name="sexo">
                                    <option>
                                        Masculino
                                    </option>
                                    <option>
                                        Femenino
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-7 col-md-4">
                               <label for="mail">
                                   Mail
                               </label>
                               <input type="email" class="form-control" name="mail" id="mail" placeholder="ejemplo@ejemplo.com">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-8 col-md-3 offset-md-1">
                                <label for="direccion">
                                    Calle:
                                </label>
                                <input class="form-control" name="dir" type="text" placeholder="Calle">
                            </div>
                            <div class="form-group col-4 col-sm-2">
                                <label for="numero">
                                    Número:
                                </label>
                                <input class="form-control" name="numero" type="number" placeholder="#">
                            </div>
                            <div class="form-group col-xs-3 col-sm-2">
                                <label for="cp">
                                    CP:
                                </label>
                                <input class="form-control" name="cp" type="number" placeholder="C.P">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-3 offset-md-1">
                                <label for="colonia">
                                    Colonia:
                                </label>
                                <input class="form-control" name="cp" type="text" placeholder="Colonia">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="estado">
                                    Estado:
                                </label>
                                <input class="form-control" name="estado" id="estado" type="text" placeholder="Estado">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6 col-3 offset-md-1">
                                <label for="tel">
                                    Teléfono:
                                </label>
                                <input class="form-control" name="tel" type="tel" id="tel" placeholder="Teléfono">
                            </div>
                            <div class="form-group  col-3">
                                <label for="fechaI">
                                    Fecha Ingreso:
                                </label>
                                <input class="form-control" name="fechaI" type="date" placeholder="Fecha Ingreso">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Datos de Sesión
                    </div>
                    <div class="card-body">
                        <div class="form-row justify-content-center">
                            <div class="form-group">
                                <label for="usr">
                                    Usuario:
                                </label>
                                <input class="form-control" name="usr" id="usr" type="text" placeholder="usuario">
                            </div>
                        </div>
                       <div class="form-row justify-content-center">
                            <div class="form-group">
                                <label for="psw1">
                                    contraseña:
                                </label>
                                <input class="form-control" name="psw" id="psw1" type="password" placeholder="constraseña">
                            </div>
                        </div>
                        <div class="form-row justify-content-center">
                            <div class="form-group">
                                <label for="psw2">
                                    repite contraseña:
                                </label>
                                <input class="form-control" name="psw" id="psw2" type="password" placeholder="constraseña">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="justify-content-center col-12">
                    <button class="btn btn-success" type="submit" value="Registrar">Registrar</button>
                </div>
            </form>
        </div>
            <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
            <script src="js/jquery.js"></script><!-- CÓDIGO DE BOOTSTRAP -->
            <script src="js/bootstrap.min.js"></script> <!-- CÓDIGO DE BOOTSTRAP -->
            <script src="js/popper.min.js"></script>
        
    </body>
</html>