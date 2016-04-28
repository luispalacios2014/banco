<?php
/**
 * Created by IntelliJ IDEA.
 * User: luis
 * Date: 28/03/2016
 * Time: 03:27 PM
 */
/**
 * Class clientes_clientes
 * @package Gym\Administracion\Gym_admin\modulos\cuentas\cuentas
 */
include_once ("/librerias/head.php");

class pagos_pagos {

    /**
     * MODULO REGISTRAR CLIENTES
     */
    function registrar() {
        ?>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Pagos
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
                        <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>REGISTRO DE PAGOS</h3></center>
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
                                        <li class="active"><a>PAGOS SERVICIOS</a></li>

                                    </ul>

                                    <form name="signupForm1" id="signupForm1" class="form-horizontal" method="post" autocomplete="off" action="<?php echo createrUrl("pagos", "pagos", "regi_pagos"); ?>"  >
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
                                                    <input type="text" class="form-control" id="identificacion" name="fecha" value="<?php echo $fecha; ?>" placeholder="Identificaci&oacute;n"  readonly="">                </div>
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
                                                    <i class="fa fa-globe"></i><font><font>Pagos
                                                </h2>
                                            </div>

                                            <div class="col-lg-6 form-group">
                                                <label class="col-sm-3 control-label" for="tipo">Estado</label>
                                                <div class="col-xs-9">
                                                    <select class="form-control" name="estado" id="estado">
                                                        <option value="Abonado">Abono</option>
                                                        <option value="Pagado">Pago Total</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 form-group">
                                                <label class="col-sm-3 control-label" for="nombre">Valor A Pagar</label>
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control" id="valor_recibido" name="valor_recibido" placeholder="$" onkeypress="return soloNumeros(event)">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 form-group">
                                                <label class="col-sm-3 control-label" for="nombre">Valor Total</label>
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control" id="valor_total" name="valor_total" placeholder="$" onkeypress="return soloNumeros(event)">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <label class="col-sm-3 control-label" for="nombre">Codigo Recibo</label>
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control" id="codigo_recibo" name="codigo_recibo"  placeholder="ingrese codigo" onkeypress="return soloNumeros(event)">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <label class="control-label col-sm-3" for="moneda">Tipo De Moneda</label>
                                                <div class="col-xs-9">
                                                    <select class="form-control" name="moneda" id="moneda">

                                                        <?php
                                                        $a = new Conexion();
                                                        $sql = ("select * from moneda");
                                                        $res = $a->execute1($sql);
                                                        while ($rows = pg_fetch_array($res)) {
                                                            echo "<option value='" . $rows['id'] . "'><font><font>" . $rows['nombre'] . "</font></font></option>";
                                                        }
                                                        ?>

                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                </div>
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" onclick="" >Registrar</button>
                            </div>
                            </form>

                        </div><!-- /.box -->
                    </div><!--/.col (left) -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                    Administrar Pagos
                </div><!-- /.box-footer-->
        </div><!-- /.box -->

        </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <?php
    }

    /**
     * @funcion INSERTAR CLIENTES
     */
    function regi_pagos() {
        $a = new Conexion();
        $modulo = "pagos";
        $archivo = "pagos";
        $accion = "listar";

        date_default_timezone_set('America/Bogota');
        $fecha_registro = date('y-m-d');
        extract($_POST);


        $clientes = ("'$nombre','$apellido',$identificacion,'$fecha_registro', $tipo_identificacion" );
        $datos1 = ("nombre, apellido, num_documento,fecha_registro, tipo_documento_id");
        $sql = ("insert into cliente($datos1) values ($clientes)");
        $a->execute($sql);


        //INSERTO EN LA TABLA CLIENTES
        $sql = ("SELECT  * from cliente ORDER BY id DESC LIMIT 1");
        $res = $a->execute1($sql);
        while ($rows = pg_fetch_assoc($res)) {
            $id_cli = $rows['id'];
        }




        //INSERTO EN LA TABLA pagos

        $pagos = ("'$estado','$valor_recibido','$valor_total','$moneda','$codigo_recibo', $id_cli ");
        $datos4 = ( "estado, valor_recibido, valor_total, moneda_id,  codigo_recibo, cliente_id");
        $sql3 = ("insert into pagos($datos4) values ($pagos)");

        $a->execute($sql3);
        $a->mensaje_registro($modulo, $archivo, $accion);
        // }
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
                    Pagos Realizados
                    <small>De los Recibos</small>
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
                                <h3 class="box-title">Ver todas los recibos</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">

                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>

                                            <th>Codigo Recibo</th>
                                            <th>Cliente</th>
                                            <th>estado</th>
                                            <th>Total pagar</th>
                                            <th>Pago Actual</th>
                                            <th>Debe</th>
                                            <th>Acciones</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $a = new Conexion();
                                        $sql = ("SELECT  
                                            estado,
                                            (cliente.apellido || ' ' || cliente.nombre) as cliente,
                                            valor_total, 
                                            codigo_recibo,
                                            valor_recibido
                                            FROM 
                                            pagos,
                                            cliente
                                            WHERE
                                            pagos.cliente_id=cliente.id
                                            ORDER BY 
                                            pagos.id;
"
                                                );
                                        $resul = $a->execute1($sql);
                                        while ($rows = pg_fetch_array($resul)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $rows['codigo_recibo']; ?></td>
                                                <td><?php echo $rows['cliente']; ?></td>
                                                <td><?php echo $rows['estado']; ?></td>
                                                <td><?php echo $rows['valor_total']; ?></td>
                                                <td><?php echo $rows['valor_recibido']; ?></td>
                                                <td>
                                                    <?php
                                                    if ($rows['estado'] == 'Pagado')
                                                        echo 'Recibo Pago En Su Totalidad';
                                                    else {
                                                        $total = $rows['valor_total'];
                                                        $recibido=$rows['valor_recibido'];
                                                        $resta= $total-$recibido;
                                                        echo $resta;
                                                        
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

                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="<?php echo createrUrl("cuentas", "cuentas", "modificar"); ?>&id_cuenta=<?php echo $rows['id_cuenta']; ?>" >Editar</a></li>

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

        function modificar() {
            $id_cuenta = $_GET['id_cuenta'];
            $a = new Conexion();
            $sql = ("select cu.id as id_cuenta, c.id,c.nombre, c.apellido, c.num_documento,c.fecha_registro, c.tipo_documento_id ,
                                                pn.fecha_nacimiento, pn.direccion, pn.ciudad_id, pn.telefono, cu.actived as estado_cuenta, tp.nombre as tipocuenta , c.actived as estado_cliente from cliente c
                                                JOIN persona_natural pn
                                                  on c.id = pn.cliente_id
                                                join cuenta cu
                                                  ON c.id = cu.cliente_id
                                                JOIN tipo_cuenta tp
                                                  ON cu.tipo_cuenta_id = tp.id
                                              WHERE cu.id  = $id_cuenta");
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

                                        <form name="signupForm1" id="signupForm1" class="form-horizontal" method="post" autocomplete="off" action="<?php echo createrUrl("cuentas", "cuentas", "actualizar"); ?>"  >
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

                                                    <!--                                                                                <div class="col-lg-6 form-group">
                                                                                                                                        <label class="control-label col-sm-3" for="tipo_identificacion">Tipo Identificacion</label>
                                                                                                                                        <div class="col-xs-9">
                                                                                                                                            <select class="form-control" name="tipo_identificacion" id="tipo_identificacion">
                                                    
                                                                                                                                                //<?php
//                                                                                            $a = new Conexion();
//                                                                                            $sql = ("select * from tipo_documento");
//                                                                                            $res = $a->execute1($sql);
//
//                                                                                            while ($rows = pg_fetch_array($res)) {
//
//                                                                                                $tipo = $datos['tipo_documento_id'];
//                                                                                                if ($tipo == $rows['id']) {
//                                                                                                    echo "<option value='" . $rows['id'] . "' selected ><font><font>" . $rows['nombre'] . "</font></font></option>";
//                                                                                                } else {
//                                                                                                    echo "<option value='" . $rows['id'] . "'><font><font>" . $rows['nombre'] . "</font></font></option>";
//                                                                                                }
//                                                                                            }
//                                                                                            
                                                    ?>
                                                    
                                                                                                                                            </select>
                                                                                                                                        </div>
                                                                                                                                    </div>-->



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
                                                        <label class="col-sm-3 control-label" for="telefono">Telefono</label>
                                                        <div class="col-xs-9">
                                                            <input type="text" class="form-control" value="<?php echo $datos['telefono'] ?>" id="telefono" name="telefono" placeholder="Telefono" onkeypress="return soloNumeros(event)">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 form-group" >
                                                        <label class="col-sm-3 control-label" for="fecha_nacimiento">Fecha Nacimiento</label>
                                                        <div class="col-xs-9">
                                                            <input type="text"  value="<?php echo $datos['fecha_nacimiento'] ?> "class="form-control" id="nacimiento" name="nacimiento">
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
         * @funcion MODULO MODIFICAR CLIENE
         */

        function actualizar() {
            $a = new Conexion();
            $modulo = "cuentas";
            $archivo = "cuentas";
            $accion = "listar";
            extract($_POST);
            if ($valor5 == 'Activo') {

                echo $sql1 = ("update cliente set nombre='$nombre', apellido='$apellido' WHERE id=$id_cliente");
                echo $sql2 = ("update persona_natural set direccion='$direccion', telefono='$telefono' where cliente_id=$id_cliente");
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
                echo $sql6 = ("update persona_natural set direccion='$direccion', telefono='$telefono' where cliente_id=$id_cliente");
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
    