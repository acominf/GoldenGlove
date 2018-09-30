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
            include_once(__DIR__ . '/php/config.php'); /*agrega los datos de configuración*/
            require_once(__DIR__ . '/php/clases/Usuario.php');/* agrega la clase usuario*/
            //include_once(__DIR__ . '/ModAltaUsuario.php');
            session_start();
            $usuario;
            if(isset($_SESSION['usuario'])){
                $usuario = $_SESSION['usuario'];
            }
            include(__DIR__ . '/php/include/headerI.php');/* agrega el menu*/
        ?>
        <div class="container cuerpo">
                   <?php
                        mysqli_report(MYSQLI_REPORT_STRICT);//Permite arrojar excepciones personalizadas
                        try{
                            $cnn = new mysqli(SRVDR,USR,PASS,DB);
                        }catch(Exception $ex){
                            echo "Error al conectar a la base de datos";
                        }
                        if($res = $cnn->query('SELECT * FROM usuario')){
                            while($fila = $res->fetch_assoc()){ ?>
                            <div class="accordion" id="usuario<?php echo $fila['usuarioId']?>">
                              <div style="border: 1px solid #c0924f;">
                                <div style="border-bottom: 1px solid #c0924f;color:white;" id="header <?php echo $fila['usuarioId']?>">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $fila['usuarioId']?>" aria-expanded="true" aria-controls="collapseOne">
                                      <?php  echo $fila['nombre'] . ' ' . $fila['apellidoPat'] . ' ' . $fila['apellidoMat']; ?>
                                    </button>
                                    <button class="btn btn-secondary" data-toggle="modal" data-target="#modalAltaUsuario">
                                        editar
                                    </button>
                                    <div class="row">
                                       <div class="col-md-3">
                                            <label>Usuario:</label>
                                            <?php echo $fila['usuario']; ?>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Fecha Ingreso:</label>
                                            <?php echo $fila['fechaIng']; ?>
                                        </div>
                                    </div>
                                </div>

                                <div style="color:white;" id="collapse<?php echo $fila['usuarioId']?>" class="collapse" aria-labelledby="headingOne" data-parent="#usuario<?php echo $fila['usuarioId'];?>">
                                  <div class="card-body row">
                                    <div class="col-12 col-md-3">
                                       <label>Calle:</label>
                                        <?php echo $fila['calle'] . ' #' . $fila['numeroInt']; ?>
                                    </div>
                                    <div class="col-12 col-md-3">
                                       <label>Colonia:</label>
                                        <?php echo $fila['colonia']; ?>
                                    </div>
                                    <div class="col-12 col-md-2">
                                       <label>C.P:</label>
                                        <?php echo $fila['cp']; ?>
                                    </div>
                                    <div class="col-12 col-md-3">
                                       <label>Estado:</label>
                                        <?php echo $fila['estado']; ?>
                                    </div>
                                    <div class="col-12 col-md-3">
                                       <label>Teléfono:</label>
                                        <?php echo $fila['telefono']; ?>
                                    </div>
                                    <div class="col-12 col-md-3">
                                       <label>Mail:</label>
                                        <?php echo $fila['mail']; ?>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>

                            </div>

                            <!--  <div class="row">
                                  <div class= "col-12">
                                        <div class="row ">
                                           <div class="col-1 usuarios">
                                                <?php /* echo $fila['usuarioId']; */?>
                                            </div>
                                            <div class="col-4 usuarios">
                                                <?php /* echo $fila['nombre']; */ ?>
                                            </div>
                                            <div class="col-5 usuarios">
                                                <?php /* echo $fila['apellidoPat'] . ' ' . $fila['apellidoMat']; */ ?>
                                            </div>
                                            <button class="btn btn-secondary btn-sm col-1" type="button">
                                                Editar
                                            </button>
                                            <button class="btn btn-secondary btn-sm col-1" type="button">
                                                Eliminar
                                            </button>
                                        </div>
                                    </div>
                                </div> -->
                    <?php     }
                            $res->close();
                        }
                        else {
                            echo 'error en la consulta';
                        } ?>
                        
                
<!--              
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  
</div>
-->                
                
        </div>
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
		<script src="js/jquery.js"></script><!-- CÓDIGO DE BOOTSTRAP -->
		<script src="js/bootstrap.min.js"></script> <!-- CÓDIGO DE BOOTSTRAP -->
        <script src="js/popper.min.js"></script>
	</body>
</html>