<?php
$imagen = $_FILES['imagen'];
if(isset($imagen)){
    /*
    echo 'nombre: ' . $imagen['name'];
    echo '<br>tamaño(bytes): ' . $imagen['size'];
    echo '<br>tipo: ' . $imagen['type'];
    echo '<br>carpeta temporal: ' . $imagen['tmp_name'];
    echo '<br>error' . $imagen['error'];
    echo '<br>titulo de imagen: ' . $_POST['titulo'];
    echo '<br>descripcion de imagen: ' . $_POST['Descripcion'];
    echo '<br>dimensión de la imagen' . var_dump(getimagesize($imagen['tmp_name']));
    */
    require_once(__DIR__ .'/../clases/Imagen.php');
    
    $img = new Imagen();
    try{
        if($img->inicializaParametros($imagen)){
            if(!$img->subeFoto()){
                echo 'Error al subir la imagen al servidor';
            }
            else{
                echo 'La imagen se subió de forma exitosa';
            }
        }
        else{
            echo 'Error al inicializar imagen';
        }
    }
    catch(Exception $ex){
        echo $ex->getMessage();
    }
}
else{
    echo 'error';
}