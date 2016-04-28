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


$(document).ready(function() {
    $('#ejemplo7').click(function() {
        //alert($('button[id=ejemplo5]').val());
        //var text = $(this).attr('value');
        $('#valor7').attr('value','Inactivo');
    });
});

$(document).ready(function() {
    $('#ejemplo8').click(function() {
        //alert($('button[id=ejemplo5]').val());
        //var text = $(this).attr('value');
        $('#valor8').attr('value','Activo');
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

function valida_envia(){

    //valido la edad. tiene que ser entero mayor que 18
    saldo = document.signupForm1.saldo.value
    saldo = validarEntero(saldo)
    document.signupForm1.saldo.value=saldo

    if (saldo==""){
        alert("Tiene que introducir un número entero en su edad.")
        document.signupForm1.saldo.focus()
        return 0;
    }else{
        if (edad<50000){
            alert("LA CUOTA MINIMA TIENE QUE SER DE 50.000 PESOS.")
            document.signupForm1.saldo.focus()
            return 0;
        }
    }
}
















