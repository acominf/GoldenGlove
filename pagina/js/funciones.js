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

function editaUsuario(usuarioId) {
    var nombre = document.getElementById("nombreU").value.split("+");
    var sexo = document.getElementById("sexo").innerHTML.trim();
    var mail = document.getElementById("mailU").innerHTML;
    var calle = document.getElementById("dirU").innerHTML.split("#");
    var cp = document.getElementById("cpU").innerHTML;
    var col = document.getElementById("coloniaU").innerHTML;
    var estado = document.getElementById("estadoU").innerHTML;
    var tel = document.getElementById("telU").innerHTML;
    var fechaIng = document.getElementById("fechaIngresoU").innerHTML;
    
    document.getElementById("datosSesion").style.display = 'none';
    document.getElementById("nombre").value = nombre[0];
    document.getElementById("apellidoP").value = nombre[1];
    document.getElementById("apellidoM").value = nombre[2];
    document.getElementById("listaSexo").value = sexo;
    document.getElementById("mail").value = mail.trim();
    document.getElementById("dir").value = calle[0].trim();
    document.getElementById("numero").value = calle[1].trim();
    document.getElementById("cp").value = cp.trim();
    document.getElementById("colonia").value = col.trim();
    document.getElementById("estado").value = estado.trim();
    document.getElementById("tel").value = tel.trim();
    document.getElementById("fechaIngreso").value = fechaIng.trim();
    document.getElementById("tituloModal").innerHTML = "Editar usuario";
    document.getElementById("formUsuario").action = "php/pagina/actualizaUsuario.php";
    document.getElementById("btnRegistrar").innerHTML = "Actualizar";
    document.getElementById("btnRegistrar").value = usuarioId;
}
