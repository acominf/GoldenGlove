
<header>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">
                        Toggle navigation
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class= "<?php echo $paginaId == 1 ? 'active' : ''; ?> ">
                        <a href="index.php">
                            Inicio 
                            <span class="sr-only">
                                (current)
                            </span>
                        </a>
                    </li>
                    <li class= "<?php echo $paginaId == 2 ? 'active' : ''; ?> ">
                        <a href="nosotros.html">
                            Nosotros
                        </a>
                    </li>
                    <li class= "<?php echo $paginaId == 3 ? 'active' : ''; ?> ">
                        <a href="entrenamiento.html">
                             Entrenamientos
                        </a>
                    </li>
                    <li class= "<?php echo $paginaId == 4 ? 'active' : ''; ?> ">
                        <a href="galeria.php">
                             Galería
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="login.php">
                            Iniciar Sesión
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Usuario 
                            <span class="caret">
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    Perfil
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Salir
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="fondoLogo">
        <a href="index.php">
        <div class="logo">
            <!--img src="imagenes/logo152.png"/-->
        </div>
        </a>
    </div>
    <h1 class="nombre text-center">
        <strong>GOLDEN GLOVE</strong>
    </h1>
    <p class="text-center">
            Bienvenidos a el mejor gimnasio de San Luis Potosí
    </p>
</header>
