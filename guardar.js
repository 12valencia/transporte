function guardar(){
    db.collection("usuarios").add({

        cedula: document.getElementById("cedula").value,
        nombre: document.getElementById("nombre").value,
        celular: document.getElementById("celular").value,
        direccion: document.getElementById("direccion").value,
        correo: document.getElementById("correo").value,
        mensaje: document.getElementById("mensaje").value
       
    })
    .then((docRef) => {
        alert("Registro exitoso, su numero de guia es su cedula")
    })
    .catch((error) => {
        alert("Error en el registro")
    });
}

