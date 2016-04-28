/**
 * Created by luis on 09/03/2016.
 */
$(document).ready(function() {
    $('#ejemplo5').click(function() {
        //alert($('button[id=ejemplo5]').val());
        //var text = $(this).attr('value');
        $('#valor5').attr('value','Inactivo');
    });
});

$(document).ready(function() {
    $('#ejemplo6').click(function() {
        //alert($('button[id=ejemplo5]').val());
        //var text = $(this).attr('value');
        $('#valor6').attr('value','Activo');
    });
});

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
