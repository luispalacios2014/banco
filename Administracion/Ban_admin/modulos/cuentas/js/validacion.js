function confirm(mensaje, url) {
    swal({title: mensaje,
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#58ACFA",
        confirmButtonText: "SI",
        cancelButtonText: "NO",
        closeOnConfirm: false,
        closeOnCancel: false}, function (isConfirm) {
        if (isConfirm) {
            window.location = url;
        } else {
            swal({
                title: "Cancelado",
                type: "error",
                timer: 1000
            });
        }
    });
}

function xmlhttp() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function select() {
    //donde se mostrar� el resultado
    divResultado = document.getElementById('ciudad');
    //tomamos el valor de la lista desplegable
    nom = document.getElementById('Dep_id').value;
    //instanciamos el objetoAjax
    ajax = xmlhttp();
    if (nom.length == 0) {
        divResultado.innerHTML = "";
        return;
    }
    //usamos el medoto POST
    //archivo que realizar� la operacion
    //datoscliente.php
    ajax.open("POST", "modulos/cuentas/librerias/select.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            //mostrar resultados en esta capa
            divResultado.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    //enviando los valores
    ajax.send("nombres=" + nom)
}

// uso colocar en el input onkeypress="return soloLetras(event)"
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";
    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}
// uso colocar en el input onkeypress="return soloNumeros(event)"
function soloNumeros(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    numeros = "0123456789";
    especiales = "8-37-39-46";
    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    if (numeros.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}
//uso colocar en el FORM onSubmit="return nuevoU()"
function nuevoU() {
    var tu = document.getElementById("tip_usu_id");
    var id = document.getElementById("usu_identificacion");
    if (tu.value == "" || tu.value.indexOf(" ") == 0) {
        swal({
            title: "Por favor  seleccione el tipo de usuario",
            type: "error",
            timer: 1000
        });
        tu.style.border = "2px solid red";
        tu.focus();
        return false;
    } else {
        tu.style.border = "";
    }
    if (id.value == "" || id.value.indexOf(" ") == 0) {
        swal({
            title: "Por favor ingrese el numero de identificaci\u00F3n",
            type: "error",
            timer: 1000
        });
        id.style.border = "2px solid red";
        id.focus();
        return false;
    } else {
        id.style.border = "";
    }
}