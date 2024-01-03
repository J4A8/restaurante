function Enviar() {
    var nombres = document.getElementById('name').value;
    var correo = document.getElementById('email').value;
    var coment = document.getElementById('subject').value;
    $.post('php/contact.php',{nombre:nombres, mail:correo, asunto:coment})

    if (nombres === "" || correo === "" || coment === "" ) {
            alert("Debe rellenar los datos");
        
   
          return false;

        }
}
