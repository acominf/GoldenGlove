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

function eliminaContenido(contenidoId){
    document.getElementById("contenidoId").value=contenidoId;
}

unction editaUsuario(usuarioId) {
    var usuarioId = document.getElementById(usuarioId);
    var nombre = document.getElementById("nombre");
    var apP = document.getElementById("apellidoP");
    var apM = document.getElementById("apellidoM");
    //var sexo = document.getElementById("sexo");
    var mail = document.getElementById("mail");
    var calle = document.getElementById("dir");
    var numero = document.getElementById("numero");
    var cp = document.getElementById("cp");
    var col = document.getElementById("colonia");
    var estado = document.getElementById("estado");
    var tel = document.getElementById("tel");
    var fechaIng = document.getElementById("fechaIngreso");
    
    document.getElementById("tituloModal").innerHTML = "Editar usuario";
    document.getElementById("formUsuario").action = "php/pagina/editaUsuario.php";
    document.getElementById("btnRegistrar").innerHTML = "Actualizar";
    document.getElementById("modalButton").value = usuarioId;
}
