<?php
class Conexion {

   private $conex;
    private $user;
    private $port;
    private $pass;
    private $db;
    private $host;


    function __construct() {
       // include_once 'configuracion.php';
        $this->host = 'localhost';
        $this->user = 'postgres';
        $this->pass = 'palacios';
        $this->port = '5432';
        $this->db = 'sistemabanco';
        $conex = "host=$this->host user=$this->user password=$this->pass port=$this->port dbname=$this->db";
        $this->conex = pg_connect($conex);
        if (!$this->conex) {
            echo "PROBLEMAS DE CONEXION";
            /* } else {
              echo "CONEXION EXITOSA";
              } */
        }
    }

    function destruir() {
        pg_close($this->conex);
    }

    function execute($sql) {
         $ejecucion = pg_query($this->conex, $sql);
        if ($ejecucion) {
            $resultado = array();
            while ($row = @pg_fetch_row($ejecucion)) {
                array_push($resultado, $row);
            }
            return $resultado;
        } else {
            echo pg_last_error();
        }
    }

    function execute1($sql) {
          $ejecucion = pg_query($this->conex, $sql);
        if ($ejecucion) {

            return $ejecucion;
        } else {
            echo pg_last_error();
        }
    }

    function mensaje_registro($modulo,$archivo,$accion){
        ?>
        <script>
            swal({
                title: "Registro Exitoso ",
                type: "success",
            },setTimeout( function () {
                window.location = "loader.php?modulo=<?php echo $modulo?>&archivo=<?php echo $archivo ?>&accion=<?php echo $accion?>";
            },1800) );
        </script>

        <?php
    }

    function mensaje_actualizar($modulo,$archivo,$accion){
        ?>
        <script>
            swal({
                title: "Actualizacion Exitosa",
                type: "success",
            },setTimeout( function () {
                window.location = "loader.php?modulo=<?php echo $modulo?>&archivo=<?php echo $archivo ?>&accion=<?php echo $accion?>";
            },1800) );
        </script>

        <?php
    }

    function mensaje_error($modulo,$archivo,$accion){
        ?>
        <script>
            swal({
                title: "Error",
                type: "error",
            },setTimeout( function () {
                window.location = "loader.php?modulo=<?php echo $modulo?>&archivo=<?php echo $archivo ?>&accion=<?php echo $accion?>";
            },1800) );
        </script>

        <?php
    }

    function saldo($modulo,$archivo,$accion){
        ?>
        <script>
            swal({
                title: "Error",
                type: "error",
            },setTimeout( function () {
                window.location = "loader.php?modulo=<?php echo $modulo?>&archivo=<?php echo $archivo ?>&accion=<?php echo $accion?>";
            },1800) );
        </script>

        <?php
    }
    

}
