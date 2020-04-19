window.onload = function() {
var miFormulario = document.querySelector('.formulario');

    var campoUsername = miFormulario.querySelector('.username');

    var campoEmail = miFormulario.querySelector('.email');
    campoEmail.onblur = function() {
        if (!emailRegex.test(this.value)) {
            alert('El campo email tiene un formato incorrecto');
        }
    }
    var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

    miFormulario.querySelector('.pais');

    var campoPass = miFormulario.querySelector('.password');
    var campoConfPass = miFormulario.querySelector('.password-confirm');

    miFormulario.onsubmit = function() {
        if (campoUsername.value == '') {
            alert('El campo Nombre de Usuario es obligatorio');
            event.preventDefault();
        } else if (campoEmail.value == '') {
            alert('El campo email es obligatorio');
            event.preventDefault();
        } else if (campoPass.value == '') {
            alert('El campo contraseña es obligatorio');
            event.preventDefault();
        } else if (campoConfPass.value !== campoPass.value) {
            alert('Las contraseñas no coinciden');
            event.preventDefault();
        }    
    }
    
    var selectPaises = document.getElementById('pais');

    //Primero traemos los paises
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        var options = JSON.parse(xmlhttp.responseText);
        var option = "";
        for( var pais in options.contenido){
                option += "<option value=" + options.contenido[pais] + ">" + pais + "</option>";
        }
        selectPaises.innerHTML = option; 
}
};
xmlhttp.open("GET", "http://pilote.techo.org/?do=api.getPaises", true);
xmlhttp.send();

    var selectProvincias = document.getElementById('provincias');

//Cuando elijo otro pais, mostrarme las provincias si elegi argentina
selectPaises.onchange = function(e){
	var value = e.target.value;
	if (value == 1){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
    		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        	var options = JSON.parse(xmlhttp.responseText);
        	var option = "";
        	for( var provincia in options.contenido){
                	option += "<option value=" + options.contenido[provincia] + ">" + provincia + "</option>";
        	}
        	selectProvincias.innerHTML = option; 
		}
		};
		xmlhttp.open("GET", "http://pilote.techo.org/?do=api.getRegiones?idPais=1", true);
		xmlhttp.send();
		} else {
			selectProvincias.innerHTML = "";
        }
    }
}    