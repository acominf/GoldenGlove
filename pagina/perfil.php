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
        require_once __DIR__ . '/php/clases/Usuario.php';
            session_start();
            
            if($_SESSION['usuario']==null or !isset($_SESSION['usuario'])){
                header('location:index.php');
            }
            $usuario = $_SESSION['usuario'];
            
            
            include_once(__DIR__ . '/php/include/headerI.php');
            
            
        ?>
        <div class="container d-flex justify-content-center">
            <div>
                <h1>
                    <?php
                        echo $usuario->getNombreCompleto();
                    ?>
                </h1>
            </div>
        </div>
            <div>
                <h1>
                    <?php
                        echo $usuario->getsexo();
                    ?>
                </h1>
            </div>
        <div >
            <h1>
                <?php
                    echo $usuario->correo();
                ?>
            </h1>
        </div>
                        
    <div >
        <h1>
            <?php
                echo $usuario->getDirCompleta();
            ?>
        </h1>
    </div>
    <div >
        <h1>
            <?php
                echo $usuario->getCp();
            ?>
        </h1>
    </div>
    <div >
        <h1>
            <?php
                echo $usuario->getColonia();
            ?>
        </h1>
    </div>
    <div >
        <h1>
            <?php
                echo $usuario->getEstado();
            ?>
        </h1>
    </div>
    <div>
        <h1>
            <?php
                echo $usuario->getTelefono();
            ?>
        </h1>
    </div>
    <div>
        <h1>
            <?php
                echo $usuario->getFechaIngreso();
            ?>
        </h1>
    </div>
    <div>
        <h1>
            <?php
                echo $usuario->getUsuario();
            ?>
        </h1>
    </div>
    <div>
        <h1>
            <?php
                echo $usuario->getActivo();
            ?>
        </h1>
    </div>
    <div >
        <h1>
            <?php
                echo $usuario->getFechaAlta();
            ?>
        </h1>
    </div>
        
        
        
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
		<script src="js/jquery.js"></script><!-- CÓDIGO DE BOOTSTRAP -->
		<script src="js/bootstrap.min.js"></script> <!-- CÓDIGO DE BOOTSTRAP -->
        <script src="js/popper.min.js"></script>
	</body>
</html>


