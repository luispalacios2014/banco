<?php
/**
 * Created by IntelliJ IDEA.
 * User: luis
 * Date: 22/03/2016
 * Time: 12:51 PM
 */

?>
<script src="modulos/instructores/js/select.js"></script>
<script>
    function format(input)
    {
        var num = input.value.replace(/\./g,'');
        if(!isNaN(num)){
            num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
            num = num.split('').reverse().join('').replace(/^[\.]/,'');
            input.value = num;
        }

    }
</script>