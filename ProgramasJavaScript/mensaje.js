function mostrarMensaje(mensaje) {
    // Crear un elemento de div para mostrar el mensaje
    var mensajeDiv = document.createElement("div");
    mensajeDiv.setAttribute("class", "mensaje");
    
    // Crear un elemento de p para mostrar el texto del mensaje
    var mensajeTexto = document.createElement("p");
    mensajeTexto.innerHTML = mensaje;
    
    // Crear un elemento de botón para cerrar el mensaje
    var cerrarBoton = document.createElement("button");
    cerrarBoton.innerHTML = "Cerrar";
    cerrarBoton.onclick = function() {
      mensajeDiv.parentNode.removeChild(mensajeDiv);
    };
    
    // Agregar el texto y el botón al div del mensaje
    mensajeDiv.appendChild(mensajeTexto);
    mensajeDiv.appendChild(cerrarBoton);
    
    // Agregar el div del mensaje al cuerpo de la página
    document.body.appendChild(mensajeDiv);
  }
  

 
