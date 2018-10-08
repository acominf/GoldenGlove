<?php

class Imagen{
    //Extensiones válidas
    private $extenValidas;
    //ancho máximo
    private $maxWidth;
    //Alto máximo
    private $maxHeight;
    //peso máximo en bytes
    private $tam;
    // A donde se va a subir
    private $destino;
    //imagen a subir
    private $img;
    //Extensión de la imagen
    private $extension;
    
    public function __construct(){
    
    $this->extenValidas = array("image/jpg","image/jpeg","image/png","image/gif");
    $this->maxWidth = 1024;
    $this->maxHeight = 720;
    $this->tam = 2000000;
    $this->destino = __DIR__ .'/../../galeria/';
    }
    
    public function __construct2($img){
    
    $this->__construct();
    $this->inicializaParametros($img);
    }
    
    public function inicializaParametros($imagen){
        $band = 0;
        //Verifica que el archivo no exceda el tamaño especificado
        
        $this->verificaError($imagen,$imagen['error']);
        $this->verificaDimensiones($imagen);
        echo 'este es el nombre de la imagen paasada por parameto : ' . $imagen['name'];
        $this->img = $imagen;
        echo '<br>este es el nombre de la imagen de la clase : ' . $this->img['name'];
        $band = 1;
        
        return $band;
    }
    
    private function verificaError($img, $codigoError){
        if(!$this->validaExtension($img)){ // Verifica que el archivo sea una imagen
            throw new Exception(utf8_encode("Archivo no váido"),'90000');
        }
        if($img['size'] > $this->tam){ //Veriifica el tamaño en bytes de la imagen
            throw new Exception("El tamaño del archivo excede al permitido");
        }
        switch($codigoError){
            case 1:
            case 2:
                throw new Exception("El archivo excede el tamaño especificado",$codigoError . '0000');
            break;
            case 3:
                throw new Exception("El archivo no se pudo subir cumpletamente",$codigoError . '0000');
            break;
            case 4:
                throw new Exception("No se subió el archivo",$codigoError . '0000');
            break;
            case 6:
                throw new Exception("No existe la carpeta temporal en el servidor",$codigoError .'0000');
            break;
            case 7:
                throw new Exception("Error al escribir archivo en disco", $codigoError . '0000');
            break;
            case 8:
                throw new Exception("Una extensión de PHP bloqueó el proceso",$codigoError. '0000');
            break;
        }
    }
    
    private function validaExtension($img){
        return in_array(strtolower($img['type']),$this->extenValidas);
    }
    
    private function verificaDimensiones($img){
        $imageAttr = getimagesize($img['tmp_name']);
        
        if($imageAttr['width'] > $this->maxWidth){
            throw new Exception("El ancho de la imagen es mayor a lo permitido",'10001');
        }
        if($imageAttr['height'] > $this->maxHeight){
            throw new Exception("El alto de la imagen es mayor a lo permitido", '10002');
        }
    }
    
    public function subeFoto(){
        return move_uploaded_file($this->img['tmp_name'], $this->destino . $this->img['name']);
    }
    
}