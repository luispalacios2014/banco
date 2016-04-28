<?php
/**
 * Created by IntelliJ IDEA.
 * User: kellin andrea
 * Date: 21/04/2016
 * Time: 05:27 PM
 */

/**
 * Class clientes_clientes
 * @package Gym\Administracion\Gym_admin\modulos\cuentas\cuentas
 */
include_once ("librerias/head.php");

class cuentas_cuentas_empresas {

    /**
     * MODULO REGISTRAR CLIENTES
     */
    function registrar() {
        ?>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Cuentas
                    <small>Del Sistema</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Inic&iacute;o</a></li>s
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>REGISTRO DE CUENTAS</h3></center>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body">
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title"></h3>
                                    </div><!-- /.box-header -->

                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="<?php echo createrUrl("cuentas", "cuentas", "registrar"); ?>">CUENTAS PERSONAS NATURALES</a></li>

                                        <li class="active"><a>CUENTAS PERSONAS JURIDICAS</a></li>
                                    </ul>

                                    <form name="signupForm1" id="signupForm1" class="form-horizontal" enctype="multipart/form-data" method="post" autocomplete="off" action="<?php echo createrUrl("cuentas", "cuentas_empresas", "regi_empresas"); ?>"  >
                                        <div class="box-body">

                                            <div class="col-xs-12">
                                                <h2 class="page-header">
                                                    <i class="fa fa-user"></i><font><font>Informacion General
                                                </h2>
                                            </div>

                                            <?php
                                            $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
                                            $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                                            $fecha = date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
                                            ?>  
                                            <div class="col-lg-6 form-group">
                                                <label class="col-sm-3 control-label" for="identificacion">Fecha</label>
                                                <div class="col-xs-6">
                                                    <input type="text" class="form-control" id="" name="" value="<?php echo $fecha; ?>" placeholder="Identificaci&oacute;n"  readonly="">                </div>
                                            </div>

                                                    <div class="col-lg-6 form-group">
                                                        <label class="control-label col-sm-3" for="tipo_identificacion">Tipo Identificacion</label>
                                                        <div class="col-xs-9">
                                                            <select class="form-control" name="tipo_identificacion" id="tipo_identificacion">

                                                                <?php
                                                                $a = new Conexion();
                                                                $sql = ("select * from tipo_documento");
                                                                $res = $a->execute1($sql);
                                                                while ($rows = pg_fetch_array($res)) {
                                                                    echo "<option value='" . $rows['id'] . "'><font><font>" . $rows['nombre'] . "</font></font></option>";
                                                                }
                                                                ?>

                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-6 form-group">
                                                        <label class="col-sm-3 control-label" for="identificacion">Identificaci&oacute;n</label>
                                                        <div class="col-xs-9">
                                                            <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Identificaci&oacute;n" onkeypress="return soloNumeros(event)">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 form-group">
                                                <label class="col-sm-3 control-label" for="nombre">Nombre</label>
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Cliente" onkeypress="return soloLetras(event)">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 form-group">
                                                <label class="col-sm-3 control-label" for="apellido">Apellido</label>
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido Cliente" onkeypress="return soloLetras(event)">
                                                </div>
                                            </div>

                                            <div class="col-xs-12">
                                                <h2 class="page-header">
                                                    <i class="fa fa-user"></i><font><font>Informacion de la Empresa 
                                                </h2>
                                            </div>

                                            <div class="col-lg-6 form-group">
                                                <label class="col-sm-3 control-label" for="nit">Nit</label>
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control" id="nit" name="nit" placeholder="nit" onkeypress="return soloNumeros(event)">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 form-group">
                                                <label class="col-sm-3 control-label" for="nombre">Razon Social</label>
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control" id="razon_social" name="razon_social" placeholder="Razon Social" onkeypress="return soloLetras(event)">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 form-group">
                                                <label class="col-sm-3 control-label" for="direccion">Direccion</label>
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 form-group">
                                                <label class="col-sm-3 control-label" for="correo">Correo Electronico</label>
                                                <div class="col-xs-9">
                                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Electronico">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 form-group" >
                                                <label class="col-sm-3 control-label" for="fecha_cos">Fecha Constitucion</label>
                                                <div class="col-xs-9">
                                                    <input type="date" class="form-control" id="fecha_cos" name="fecha_cos">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 form-group">
                                                <label class="col-sm-3 control-label" for="imagen">Camara de Comercio</label>
                                                <div class="col-xs-9">
                                                    <input type="file" class="form-control" id="imagen" name="imagen" placeholder="Camara Comercio">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 form-group">
                                                <label class="control-label col-sm-3" for="ciudad">Ciudad</label>
                                                <div class="col-xs-9">
                                                    <select class="form-control" name="ciudad" id="ciudad">

                                                        <?php
                                                        $a = new Conexion();
                                                        $sql = ("select * from ciudad");
                                                        $res = $a->execute1($sql);
                                                        while ($rows = pg_fetch_array($res)) {
                                                            echo "<option value='" . $rows['id'] . "'><font><font>" . $rows['nombre'] . "</font></font></option>";
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 form-group">
                                                <label class="control-label col-sm-3" for="tipo_empresa">Tipo Empresa</label>
                                                <div class="col-xs-9">
                                                    <select class="form-control" name="tipo_empresa" id="tipo_empresa">
                                                       <option value='1'><font><font>Publica</font></font></option>
                                                       <option value='2'><font><font>Privada</font></font></option>
                                                       <option value='3'><font><font>Mixta</font></font></option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-xs-12">
                                                        <h2 class="page-header">
                                                            <i class="fa fa-globe"></i><font><font>Productos a Solcitar
                                                        </h2>
                                                    </div>

                                                    <div class="col-lg-6 form-group">
                                                        <label class="col-sm-3 control-label" for="tipo">TIPO DE CUENTA</label>
                                                        <div class="col-xs-9">
                                                            <select class="form-control" name="tipo" id="tipo">
                                                                <?php
                                                                $a = new Conexion();
                                                                $sql = ("select * from tipo_cuenta WHERE nombre='CORRIENTE' ");
                                                                $res = $a->execute1($sql);
                                                                while ($rows = pg_fetch_assoc($res)) {
                                                                    echo "<option value='" . $rows['id'] . "'><font><font>" . $rows['nombre'] . "</font></font></option>";
                                                                }
                                                                ?>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 form-group">
                                                        <label class="col-sm-3 control-label" for="nombre">SALDO</label>
                                                        <div class="col-xs-9">
                                                            <input type="text" class="form-control" id="saldo" name="saldo" placeholder="$" onkeypress="return soloNumeros(event)">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 form-group">
                                                        <label class="col-sm-3 control-label" for="banco">ENTIDAD</label>
                                                        <div class="col-xs-9">
                                                            <input type="text" class="form-control" id="banco" name="banco" value="NUESTRO BANCO" onkeypress="return soloLetras(event)" readonly="readonly" >
                                                        </div>
                                                    </div>
                                        </div>

                                </div>
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                            </form>

                        </div><!-- /.box -->
                    </div><!--/.col (left) -->
                </div><!-- /.box-body -->
        </div><!-- /.box -->

        </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <?php
    }

    /**
     * @funcion INSERTAR CLIENTES
     */
    function regi_empresas() {
        
    $_FILES['imagen']['name']; //nombre del archivo
    $_FILES['imagen']['type']; //tipo de archivo 
    $_FILES['imagen']['tmp_name'];//donde esta almacenado r.
    $_FILES['imagen']['size']; //tamaño en bytes.
    $_FILES['imagen']['error']; //almacena el codigo de error.
    if ($_FILES["imagen"]["error"] > 0){
        echo "ha ocurrido un error";
    } else {
            //esta es la ruta donde copiaremos la imagen
                $name =$_FILES['imagen']['name'];
                $uploads_dir='../Ban_admin\modulos\cuentas\img\/'.$name;
                
            //comprovamos si este archivo existe para no volverlo a copiar.
            if (is_uploaded_file($_FILES["imagen"]["tmp_name"])){
                //aqui movemos el archivo desde la ruta temporal a nuestra ruta
                $resultado = move_uploaded_file($_FILES["imagen"]["tmp_name"],$uploads_dir);
                if ($resultado){
                    echo "el archivo ha sido movido exitosamente a .$resultado;";
                } else {
                    echo "ocurrio un error al mover el archivo.";
                }
            } else {
                echo $_FILES['imagen']['name'] . ", este archivo existe";
            }
    }

        $a = new Conexion();
        $modulo = "cuentas";
        $archivo = "cuentas";
        $accion = "listar";
        date_default_timezone_set('America/Bogota');
        $fecha = date('y-m-d');
        extract($_POST);

        //INSERTO EN LA TABLA CLIENTES
        $clientes = ("'$nombre','$apellido',$identificacion,'$fecha', $tipo_identificacion" );
        $datos2 = ("nombre, apellido, num_documento,fecha_registro, tipo_documento_id");
        $sql = ("insert into cliente($datos2) values ($clientes)");
        $a->execute($sql);

        //SELECCIONO EL ULTIMO CLIENTE INSERTADO
        $sql = ("SELECT  * from cliente ORDER BY id DESC LIMIT 1");
        $res = $a->execute1($sql);
        while ($rows = pg_fetch_assoc($res)) {
            $id_cli = $rows['id'];
        }
        //INSERTO EN LA TABLA CLIENTE PERSONAS JURIDICAS
        $datos = (" $nit,'$direccion','$correo','$razon_social','$fecha_cos','$uploads_dir','$tipo_empresa',$ciudad,$id_cli");
        $datos1 = ("nit, direccion, correo, razon_social,fecha_constitucion, camara_comercio, tipo_empresa, ciudad_id,cliente_id");
        echo $sql = ("insert into persona_juridica ($datos1) values ($datos)");
        $a->execute($sql);
        
        mt_srand(time());
        $digitos = '';
        for ($i = 0; $i < 9; $i++) {
            $num_cuenta .= mt_rand(0, 9);
        }
        $cuentas = ("$num_cuenta,$saldo,'$banco','$fecha',$tipo,$id_cli ");
        $datos4 = ("num_cuenta, saldo, entidad, fecha_registro, tipo_cuenta_id, cliente_id");
        $sql3 = ("insert into cuenta($datos4) values ($cuentas)");
        $a->execute($sql3);
        
//        $a->mensaje_registro($modulo, $archivo, $accion);        
    }

    /*
     * @funcion MODULOS LISTAR CLIENTES
     */
   function listar() {
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Cuentas Bancarias
                    <small>De los Clientes</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Inic&iacute;o</a></li>s
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Ver todas las Cuentas</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">

                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>APELLIDO</th>
                                            <th>RAZON SOCIAL</th>
                                            <th>Numero De Cuenta</th>
                                            <th>Saldo</th>
                                            <th>Estado</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $a = new Conexion();
                                        $sql = ("select
                                                      cl.id,
                                                      cl.nombre as cliente,
                                                      cl.apellido,
                                                      pj.razon_social,
                                                      c.num_cuenta,
                                                      c.saldo,
                                                      c.actived,
                                                      tc.nombre,
                                                      c.estado,
                                                      c.id as id_cuenta
                                                    from
                                                      cliente cl,
                                                      cuenta c,
                                                      tipo_cuenta tc,
                                                      persona_juridica pj
                                                    where
                                                      cl.id=c.cliente_id
                                                      And
                                                      c.tipo_cuenta_id=tc.id
                                                      AND
                                                      pj.cliente_id = cl.id
                                                    ORDER BY c.id;"
                                                );
                
                                        $resul = $a->execute1($sql);
                                        while ($rows = pg_fetch_array($resul)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $rows['id']; ?></td>
                                                <td><?php echo $rows['cliente']; ?></td>
                                                <td><?php echo $rows['apellido']; ?></td>
                                                <td><?php echo $rows['razon_social']; ?></td>
                                                <td><?php echo $rows['num_cuenta']; ?></td>
                                                <td><?php echo $rows['saldo']; ?></td>
                                                <td><?php
                                                    if ($rows['actived'] == 't') {
                                                        echo "<span class='label label-success'>
                                                                <font class='h5'>Activa</font>";
                                                    } else {
                                                        echo "<span class='label label-danger'>
                                                                <font class='h5'>Inactiva</font>";
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php 
                                                
                                                    if($rows['estado']==1){
                                                        echo "<span class='label label-warning'>
                                                                <font class='h5'>Cuenta Principal</font>";
                                                    } 
                                                    ?>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-info">Action</button>
                                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <?php
                                                            $sql1=("select  count(ct.id)  AS total, c.id as id_cliente FROM cuenta ct JOIN  cliente c ON ct.cliente_id = c.id JOIN  persona_juridica pj on pj.cliente_id = c.id JOIN tipo_cuenta tc ON ct.tipo_cuenta_id = tc.id WHERE c.id=".$rows['id']." GROUP BY c.id order by c.id");
                                                            $result= $a->execute1($sql1);        
                                                            while ($row= pg_fetch_array($result)) 
                                                             {
                                                                $total=$row['total'];
                                                             }
                                                        ?>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="<?php echo createrUrl("cuentas", "cuentas_empresas", "modificar"); ?>&id_cuenta=<?php echo $rows['id_cuenta']; ?>" >Editar</a></li>
                                                            <li><a href="<?php echo createrUrl("cuentas", "cuentas_empresas", "cuenta_nueva_empresa"); ?>&id=<?php echo $rows['id']; ?>" >Cuenta Nueva</a></li>
                                                            <?php
                                                           
                                                            if ($total >=2)
                                                            {
                                                                echo  $est= $a->execute1("select estado from cuenta where estado=1 and id= ".$rows['id_cuenta']." ");
                                                                while ($ro= pg_fetch_array($est))
                                                                {
                                                                   $estado=$ro['estado'];
                                                                }
                                                                if ($estado==1)
                                                                {
                                                                 ?> 
                                                            <li><a></a></li>
                                                                 <?php
                                                                }else
                                                                {
                                                                    ?>
                                                            <li><a href="<?php echo createrUrl("cuentas", "cuentas_empresas", "cuenta_principal"); ?>&id_cuenta=<?php echo $rows['id_cuenta']; ?>" >PONER COMO CUENTA PRINCIPAL</a></li>
                                                                    <?php 
                                                                }
                                                           
                                                            }
                                                                
                                                            ?>
                                                        </ul>
                                                    </div>
                                                </td>

                                            </tr>
                                                        <?php
                                                    }
                                                    ?>
                                    </tbody>
                                </table>

              
                                        </div><!-- /.box-body -->
                                        </div><!-- /.box -->


                                        </div><!-- /.col -->
                                        </div><!-- /.row -->
                                        </section><!-- /.content -->
                                        </div><!-- /.content-wrapper -->

      <?php
    }
    /*
    * @funcion MODULO CUENTA NUEVA
    */
    function cuenta_nueva_empresa() {
                                        $cliente_id = $_GET['id'];
                                        $a = new Conexion();
                                        $sql = ("select c.id as id_cliente, c.nombre,c.apellido, c.num_documento, cd.nombre as ciudad, ct.entidad  from cliente c, cuenta ct, persona_juridica pj,ciudad cd
where c.id= ct.cliente_id AND c.id = pj.cliente_id AND pj.ciudad_id= cd.id AND c.id= $cliente_id");
                                        $resul = $a->execute1($sql);
                                        ?>
                                        <div class="content-wrapper">
                                            <!-- Content Header (Page header) -->
                                            <section class="content-header">
                                                <h1>
                                                    Clientes
                                                    <small>Del sistema</small>
                                                </h1>
                                                <ol class="breadcrumb">
                                                    <li><a href="#"><i class="fa fa-dashboard"></i>Inic&iacute;o</a></li>s
                                                </ol>
                                            </section>

                                            <!-- Main content -->
                                            <section class="content">
                                                <!-- Default box -->
                                                <div class="box">
                                                    <div class="box-header with-border">
                                                        <a class="glyphicon glyphicon-arrow-left" href="<?php echo createrUrl("cuentas", "cuentas_empresas", "listar"); ?>"></a> <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>CUENTA NUEVA</h3></center>
                                                        <div class="box-tools pull-right">
                                                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="box-body">
                                                            <div class="col-md-12">
                                                                <!-- general form elements -->
                                                                <div class="box box-primary">
                                                                    <div class="box-header">
                                                                        <h3 class="box-title"></h3>
                                                                    </div><!-- /.box-header -->
                                                                    <!-- form start -->

                                                                    <form name="signupForm1" id="signupForm1" class="form-horizontal" method="post" autocomplete="off" action="<?php echo createrUrl("cuentas", "cuentas_empresas", "reg_cuenta_nueva_empresas"); ?>"  >
                                                                        <?php
                                                                        while ($datos = pg_fetch_array($resul)) {
                                                                            $id = $datos['id_cliente'];
                                                                            $documento = $datos['num_documento'];
                                                                            $nombre = $datos['nombre'];
                                                                            $apellido = $datos['apellido'];
                                                                            $ciudad = $datos['ciudad'];
                                                                        }
                                                                        ?>
                                                                        <div class="box-body">

                                                                            <div class="col-xs-12">
                                                                                <h2 class="page-header">
                                                                                    <i class="fa fa-user"></i><font><font>Cuenta Nueva
                                                                                </h2>
                                                                            </div>

        <?php
        $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $fecha = date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
        ?>  
                                                                            <div class="col-lg-6 form-group">
                                                                                <label class="col-sm-3 control-label" for="identificacion">Fecha</label>
                                                                                <div class="col-xs-6">
                                                                                    <input type="text" class="form-control" id="identificacion" name="fecha" value="<?php echo $fecha; ?>" placeholder="Identificaci&oacute;n"  readonly="">                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 form-group">
                                                                                <label class="col-sm-3 control-label" for="identificacion">Identificaci&oacute;n</label>
                                                                                <div class="col-xs-9">
                                                                                    <input type="text" value="<?php echo $documento ?>" class="form-control" id="documento" name="documento" placeholder="Identificaci&oacute;n" onkeypress="return soloNumeros(event)" readonly="readonly">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 form-group">
                                                                                <label class="col-sm-3 control-label" for="nombre">Nombre</label>
                                                                                <div class="col-xs-9">
                                                                                    <input type="text" class="form-control" value="<?php echo $nombre; ?>" id="nombre" name="nom" placeholder="Nombre Cliente" onkeypress="return soloLetras(event)" readonly="readonly">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 form-group">
                                                                                <label class="col-sm-3 control-label" for="apellido">Apellido</label>
                                                                                <div class="col-xs-9">
                                                                                    <input type="text" class="form-control" value="<?php echo $apellido; ?>" id="apellido" name="ape" placeholder="Apellido Cliente" onkeypress="return soloLetras(event)"  readonly="readonly" >
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 form-group">
                                                                                <label class="control-label col-sm-3" for="ciudad">Ciudad</label>
                                                                                <div class="col-xs-9">
                                                                                    <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?php echo $ciudad; ?>" onkeypress="return soloLetras(event)" readonly="readonly" >
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 form-group">
                                                                                <label class="col-sm-3 control-label" for="banco">ENTIDAD</label>
                                                                                <div class="col-xs-9">
                                                                                    <input type="text" class="form-control" id="entidad" name="entidad" value="NUESTRO BANCO" onkeypress="return soloLetras(event)" readonly="readonly" >
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 form-group">
                                                                                <label class="col-sm-3 control-label" for="tipo">TIPO DE CUENTA</label>
                                                                                <div class="col-xs-9">
                                                                                    <select class="form-control" name="tipo" id="tipo">
                                                                                        <?php
                                                                                        $a = new Conexion();
                                                                                        $sql = ("select * from tipo_cuenta where nombre='AHORROS'");
                                                                                        $res = $a->execute1($sql);
                                                                                        while ($rows = pg_fetch_array($res)) {
                                                                                            echo "<option value='" . $rows['id'] . "'><font><font>" . $rows['nombre'] . "</font></font></option>";
                                                                                        }
                                                                                        ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6 form-group">
                                                                                <label class="col-sm-3 control-label" for="saldo">SALDO</label>
                                                                                <div class="col-xs-9">
                                                                                    <input type="text" class="form-control" id="saldo" name="saldo" placeholder="$" onkeypress="return soloNumeros(event)">
                                                                                </div>
                                                                            </div>

                                                                            <input type="hidden" value="<?php echo $id ?>" class="form-control" id="cliente" name="cliente">

                                                                        </div>

                                                                </div>

                                                            </div>
                                                        </div><!-- /.box-body -->
                                                        <div class="box-footer">
                                                            <button type="submit" class="btn btn-primary" onclick="valida_envia()" >Registrar</button>
                                                        </div>
                                                        </form>   
                                                    </div><!-- /.box -->
                                                </div><!--/.col (left) -->
                                        </div><!-- /.box-body -->
                                        <div class="box-footer">
                                            Usuarios
                                        </div><!-- /.box-footer-->
                                </div><!-- /.box -->

                                </section><!-- /.content -->
                            </div><!-- /.content-wrapper -->
                            <?php
                        }
                        /*
    * @funcion MODULO reg cuenta nueva
    */
    function reg_cuenta_nueva_empresas() {
                            $a = new Conexion();
                            $modulo = "cuentas";
                            $archivo = "cuentas";
                            $accion = "listar";

                            date_default_timezone_set('America/Bogota');
                            $fecha_registro = date('y-m-d');
                            extract($_POST);

//INSERTO EN LA TABLA CUENTAS
                            mt_srand(time());
                            $digitos = '';
                            for ($i = 0; $i < 9; $i++) {
                                $num_cuenta .= mt_rand(0, 9);
                            }
                            $cuentas = ("$num_cuenta,$saldo,'$entidad','$fecha_registro',$tipo,$cliente ");
                            $datos4 = ("num_cuenta, saldo, entidad, fecha_registro, tipo_cuenta_id, cliente_id");
                            $sql3 = ("insert into cuenta($datos4) values ($cuentas)");
                            $a->execute($sql3);
                            $a->mensaje_registro($modulo,$archivo,$accion);
                            // }
                        }
    /*
    * @funcion MODULO cuenta principal
    */
    function cuenta_principal(){
        $a = new Conexion();
        $modulo = "cuentas";
        $archivo = "cuentas";
        $accion = "listar";
        $id_cuenta = $_GET['id_cuenta'];
        $principal = 1;
        echo $sql9 = ("update cuenta set estado=$principal where id=$id_cuenta");
        $a->execute($sql9);
//        $a->mensaje_actualizar($modulo,$archivo,$accion);

     }                        
    /*
     * @funcion MODULO MODIFICAR CLIENE
     */
    function modificar() {
                            $id_cuenta = $_GET['id_cuenta'];
                            $a = new Conexion();
                            $sql = ("select cu.id as id_cuenta, c.id,c.nombre, c.apellido,
                                       pj.direccion, pj.ciudad_id,pj.nit, pj.correo, pj.razon_social, cu.actived as estado_cuenta, tp.nombre as tipocuenta , c.actived as estado_cliente from cliente c
                                      JOIN persona_juridica pj
                                        on c.id = pj.cliente_id
                                      join cuenta cu
                                        ON c.id = cu.cliente_id
                                      JOIN tipo_cuenta tp
                                        ON cu.tipo_cuenta_id = tp.id
                                        WHERE cu.id=$id_cuenta");
                            $resul = $a->execute1($sql);
                            ?>
                            <div class="content-wrapper">
                                <!-- Content Header (Page header) -->
                                <section class="content-header">
                                    <h1>
                                        Usuarios
                                        <small>Del sistema</small>
                                    </h1>
                                    <ol class="breadcrumb">
                                        <li><a href="#"><i class="fa fa-dashboard"></i>Inic&iacute;o</a></li>s
                                    </ol>
                                </section>

                                <!-- Main content -->
                                <section class="content">
                                    <!-- Default box -->
                                    <div class="box">
                                        <div class="box-header with-border">
                                            <a class="glyphicon glyphicon-arrow-left" href="<?php echo createrUrl("cuentas", "cuentas", "listar"); ?>"></a> <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>MODIFICAR CLIENTES</h3></center>
                                            <div class="box-tools pull-right">
                                                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="box-body">
                                                <div class="col-md-12">
                                                    <!-- general form elements -->
                                                    <div class="box box-primary">
                                                        <div class="box-header">
                                                            <h3 class="box-title"></h3>
                                                        </div><!-- /.box-header -->
                                                        <!-- form start -->

                                                        <form name="signupForm1" id="signupForm1" class="form-horizontal" method="post" autocomplete="off" action="<?php echo createrUrl("cuentas", "cuentas_empresas", "actualizar"); ?>"  >
                                                            <?php
                                                            while ($datos = pg_fetch_array($resul)) {
                                                                $id_cliente = $datos['id']
                                                                ?>
                                                                <div class="box-body">

                                                                    <div class="col-xs-12">
                                                                        <h2 class="page-header">
                                                                            <i class="fa fa-user"></i><font><font>Actualizar Informacion General
                                                                        </h2>
                                                                    </div>
  
                                                                    <div class="col-lg-6 form-group">
                                                                        <label class="col-sm-3 control-label" for="nombre">Nombre</label>
                                                                        <div class="col-xs-9">
                                                                            <input type="text" class="form-control" value="<?php echo $datos['nombre'] ?>" id="nombre" name="nombre" placeholder="Nombre Cliente" onkeypress="return soloLetras(event)">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 form-group">
                                                                        <label class="col-sm-3 control-label" for="apellido">Apellido</label>
                                                                        <div class="col-xs-9">
                                                                            <input type="text" class="form-control" value="<?php echo $datos['apellido'] ?>" id="apellido" name="apellido" placeholder="Apellido Cliente" onkeypress="return soloLetras(event)">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 form-group">
                                                                        <label class="col-sm-3 control-label" for="direccion">Direccion</label>
                                                                        <div class="col-xs-9">
                                                                            <input type="text" class="form-control" value="<?php echo $datos['direccion'] ?>" id="direccion" name="direccion" placeholder="Direccion">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 form-group">
                                                                        <label class="col-sm-3 control-label" for="telefono">Nit</label>
                                                                        <div class="col-xs-9">
                                                                            <input type="text" class="form-control" value="<?php echo $datos['nit'] ?>" id="nit" name="nit" placeholder="Telefono" onkeypress="return soloNumeros(event)">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 form-group" >
                                                                        <label class="col-sm-3 control-label" for="Correo">Correo</label>
                                                                        <div class="col-xs-9">
                                                                            <input type="email" value="<?php echo $datos['correo'] ?> "class="form-control" id="correo" name="correo">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-lg-6 form-group" >
                                                                        <label class="col-sm-3 control-label" for="Correo">Razon Social</label>
                                                                        <div class="col-xs-9">
                                                                            <input type="text" value="<?php echo $datos['razon_social'] ?> "class="form-control" id="razon" name="razon">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 form-group">
                                                                        <label class="control-label col-sm-3" for="ciudad">Ciudad</label>
                                                                        <div class="col-xs-9">
                                                                            <select class="form-control" name="ciudad" id="ciudad">
                                                                                <?php
                                                                                $a = new Conexion();
                                                                                $sql = ("select * from ciudad");
                                                                                $res = $a->execute1($sql);
                                                                                while ($rows = pg_fetch_array($res)) {
                                                                                    $ciud = $datos['ciudad_id'];
                                                                                    if ($ciud == $rows['id']) {
                                                                                        echo "<option value='" . $rows['id'] . "' selected ><font><font>" . $rows['nombre'] . "</font></font></option>";
                                                                                    } else {
                                                                                        echo "<option value='" . $rows['id'] . "'><font><font>" . $rows['nombre'] . "</font></font></option>";
                                                                                    }
                                                                                }
                                                                                ?>

                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group  col-lg-6">
                                                                        <label class="control-label col-sm-3" for="usuarioEstado">Estado Cliente</label>
                                                                        <div class="col-xs-9">
                                                                            <?php
                                                                            if ($datos['estado_cliente'] == 't') {
                                                                                ?>
                                                                                <div class="input-group has-success">
                                                                                    <div class="input-group-btn">
                                                                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><font><font>Acción</font></font><span class="fa fa-caret-down"></span></button>
                                                                                        <ul class="dropdown-menu">
                                                                                            <li><input type="button" value="Inactivar" name="aqui" class="btn btn-block btn-flat btn-danger" id="ejemplo5"></li>
                                                                                        </ul>
                                                                                    </div><!-- /btn-group -->
                                                                                    <input type="text" value="Activo" id="valor5" name="valor5" class="form-control" readonly="readonly">
                                                                                </div>
                                                                                    <?php
                                                                                } else {
                                                                                    ?>
                                                                                <div class="input-group has-error">
                                                                                    <div class="input-group-btn">
                                                                                        <button type="button" class="btn btn-danger dropdown-toggle"  data-toggle="dropdown" aria-expanded="false"><font><font>Acción</font></font><span class="fa fa-caret-down"></span></button>
                                                                                        <ul class="dropdown-menu">
                                                                                            <li><input type="button" value="Activar" name="aqui" class="btn btn-block btn-flat btn-success" id="ejemplo6"></li>
                                                                                        </ul>
                                                                                    </div><!-- /btn-group -->
                                                                                    <input type="text"  value="Inactivo" name="valor6" id="valor6" class="form-control" readonly="readonly">
                                                                                </div>

                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xs-12">
                                                                        <h2 class="page-header">
                                                                            <i class="fa fa-globe"></i><font><font>Actualizar Cuenta
                                                                        </h2>
                                                                    </div>

                                                                    <div class="col-lg-6 form-group">
                                                                        <label class="col-sm-3 control-label" for="banco">ENTIDAD</label>
                                                                        <div class="col-xs-9">
                                                                            <input type="text" class="form-control" id="banco" name="banco" value="NUESTRO BANCO" onkeypress="return soloLetras(event)" readonly="readonly" >
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 form-group">
                                                                        <label class="col-sm-3 control-label" for="tipo">TIPO DE CUENTA</label>
                                                                        <div class="col-xs-9">
                                                                            <div class="col-xs-9">
                                                                                <input type="text" class="form-control" id="tipocuenta" name="tipocuenta" value="<?php echo $datos['tipocuenta'] ?>" onkeypress="return soloLetras(event)" readonly="readonly" >
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="form-group col-lg-6">
                                                                        <label class="control-label col-sm-3" for="usuarioEstado">Estado Cuenta</label>
                                                                        <div class="col-xs-9">
                                                                                <?php
                                                                                if ($datos['estado_cuenta'] == 't') {
                                                                                    ?>
                                                                                <div class="input-group has-success">
                                                                                    <div class="input-group-btn">
                                                                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><font><font>Acción</font></font><span class="fa fa-caret-down"></span></button>
                                                                                        <ul class="dropdown-menu">
                                                                                            <li><input type="button" value="Inactivar" name="aqui" class="btn btn-block btn-flat btn-danger" id="ejemplo7"></li>
                                                                                        </ul>
                                                                                    </div><!-- /btn-group -->
                                                                                    <input type="text" value="Activo" id="valor7" name="valor7" class="form-control" readonly="readonly">
                                                                                </div>
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                <div class="input-group has-error">
                                                                                    <div class="input-group-btn">
                                                                                        <button type="button" class="btn btn-danger dropdown-toggle"  data-toggle="dropdown" aria-expanded="false"><font><font>Acción</font></font><span class="fa fa-caret-down"></span></button>
                                                                                        <ul class="dropdown-menu">
                                                                                            <li><input type="button" value="Activar" name="aqui" class="btn btn-block btn-flat btn-success" id="ejemplo8"></li>
                                                                                        </ul>
                                                                                    </div><!-- /btn-group -->
                                                                                    <input type="text"  value="Inactivo" name="valor8" id="valor8" class="form-control" readonly="readonly">
                                                                                </div>

                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" name="id_cliente" value="<?php echo $id_cliente ?>" id="id_cliente">
                                                                    <input type="hidden" name="id_cuenta" value="<?php echo $id_cuenta ?>" id="id_cuenta">

                                                                </div>
                                                                <?php
                                                            }
                                                            ?>
                                                    </div>

                                                </div>
                                            </div><!-- /.box-body -->
                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-primary" onclick="valida_envia()" >Actualizar</button>
                                            </div>
                                            </form>   
                                        </div><!-- /.box -->
                                    </div><!--/.col (left) -->
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                Usuarios
                            </div><!-- /.box-footer-->
                        </div><!-- /.box -->

                        </section><!-- /.content -->
                    </div><!-- /.content-wrapper -->

                    <?php
                }

    /*
     * @funcion ACTUALIZAR INSTRUCTORES
     */

   function actualizar() {
                    $a = new Conexion();
                    $modulo = "cuentas";
                    $archivo = "cuentas_empresas";
                    $accion = "listar";
                    extract($_POST);
                    if ($valor5 == 'Activo') {

                        echo $sql1 = ("update cliente set nombre='$nombre', apellido='$apellido' WHERE id=$id_cliente");
                        echo $sql2 = ("update persona_juridica set nit=$nit, direccion='$direccion', correo='$correo',razon_social='$razon' where cliente_id=$id_cliente");
                        $a->execute($sql1);
                        $a->execute($sql2);
                        $a->mensaje_actualizar($modulo, $archivo, $accion);
                    } elseif ($valor5 == "Inactivo") {
                        $estadoInactivo5 = "false";
                        echo $sql3 = ("update cliente set nombre='$nombre', apellido='$apellido', Actived=$estadoInactivo5 WHERE id=$id_cliente");
                        echo $sql4 = ("update cuenta set Actived=$estadoInactivo5 where cliente_id=$id_cliente");
                        $a->execute($sql3);
                        $a->execute($sql4);
                        $a->mensaje_actualizar($modulo, $archivo, $accion);
                    } elseif ($valor6 == "Inactivo") {
                        echo $sql5 = ("update cliente set nombre='$nombre', apellido='$apellido' WHERE id=$id_cliente");
                        echo $sql6 = ("update persona_juridica set nit=$nit, direccion='$direccion', correo='$correo',razon_social='$razon' where cliente_id=$id_cliente");
                        $a->execute($sql5);
                        $a->execute($sql6);
                        $a->mensaje_actualizar($modulo, $archivo, $accion);
                    } elseif ($valor6 == "Activo") {
                        $estadoInactivo6 = "true";
                        echo $sql7 = ("update cliente set nombre='$nombre', apellido='$apellido' , Actived=$estadoInactivo6 WHERE id=$id_cliente");
                        echo $sql8 = ("update cuenta set Actived=$estadoInactivo6 where cliente_id=$id_cliente");
                        $a->execute($sql7);
                        $a->execute($sql8);
                        $a->mensaje_actualizar($modulo, $archivo, $accion);
                    }
                    if ($valor7 == 'Activo') {
                        
                    } elseif ($valor7 == "Inactivo") {
                        $estadoInactivo7 = "false";
                        echo $sql9 = ("update cuenta set Actived=$estadoInactivo7 where id=$id_cuenta");
                        $a->execute($sql9);
                        $a->mensaje_actualizar($modulo, $archivo, $accion);

                    } elseif ($valor8 == "Inactivo") {
                        
                    } elseif ($valor8 == "Activo") {
                        $estadoInactivo8 = "true";
                        echo $sql01 = ("update cuenta set Actived=$estadoInactivo8 where id=$id_cuenta");
                        $a->execute($sql01);
                        $a->mensaje_actualizar($modulo, $archivo, $accion);
                    }
                }

}
