function guia(){
    db.collection("guia").add({

        guia: document.getElementById("guia").value,
       
       
    })
    .then((docRef) => {
        alert("Pedido en despacho ")
    })
    .catch((error) => {
        alert("Error en el registro")
    });
}
