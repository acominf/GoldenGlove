function actualizaCont(contenidoId) {
    var contenido = document.getElementById("E" + contenidoId);
    var formTitulo = document.getElementById("titulo");
    var formContenido = document.getElementById("contenido");
    
    document.getElementById("tituloModal").innerHTML = "Editar contenido";
    document.getElementById("formContenido").action = "php/pagina/actualizaContenido.php";
    document.getElementById("modalButton").innerHTML = "Actualizar";
    document.getElementById("modalButton").value = contenidoId;
    formTitulo.value = contenido.getElementsByTagName("h2")[0].innerHTML.trim();
    formContenido.value = contenido.getElementsByTagName("p")[0].innerHTML.trim().replace(/<br\s*\/?>/mg,"\n");;
}

function agregaCont() {
    document.getElementById("tituloModal").innerHTML = "Agregar contenido";
    document.getElementById("modalButton").innerHTML = "Publicar";
    document.getElementById("modalButton").value = contenidoId;
    document.getElementById("titulo").value = "";
    document.getElementById("contenido").value = "";
    document.getElementById("formContenido").action = "php/pagina/agregaContenido.php";
}

