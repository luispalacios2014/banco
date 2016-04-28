<?php
/**
 * Created by IntelliJ IDEA.
 * User: luis
 * Date: 28/03/2016
 * Time: 03:27 PM
 */


/**
 * Class clientes_clientes
 * @package Gym\Administracion\Gym_admin\modulos\clientes\clientes
 */

class clientes_clientes{

    /**
     * MODULO REGISTRAR CLIENTES
     */
    function registrar()
    {
        ?>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Instructores
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
                        <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>REGISTRO DE INSTRUCTORES</h3></center>
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
                                    <form  id="signupForm1" class="form-horizontal" method="post" autocomplete="off" action="<?php echo createrUrl("instructores", "instructores", "regi_instructores"); ?>" >
                                        <div class="box-body">

                                            <div class="col-xs-12">
                                                <h2 class="page-header">
                                                    <i class="fa fa-user"></i><font><font>Datos Personales
                                                </h2>
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
                                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Usuario" onkeypress="return soloLetras(event)">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 form-group">
                                                <label class="col-sm-3 control-label" for="identificacion">Apellido</label>
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Identificaci&oacute;n" onkeypress="return soloNumeros(event)">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 form-group">
                                                <label class="col-sm-3 control-label" for="nombre">Direccion</label>
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Usuario" onkeypress="return soloLetras(event)">
                                                </div>
                                            </div>

                                            <div class="col-xs-12">
                                                <h2 class="page-header">
                                                    <i class="fa fa-globe"></i><font><font>AdminLTE, Inc.
                                                </h2>
                                            </div>

                                            <div class="col-lg-6 form-group">
                                                <label class="col-sm-3 control-label" for="identificacion">Identificaci&oacute;n</label>
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Identificaci&oacute;n" onkeypress="return soloNumeros(event)">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 form-group" >
                                                <label class="col-sm-3 control-label" for="nombre">Nombre</label>
                                                <div class="col-xs-9">
                                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Usuario" onkeypress="return soloLetras(event)">
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
                                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Usuario" onkeypress="return soloLetras(event)">
                                                </div>
                                            </div>



<!--                                            <div class="form-group">-->
<!--                                                <label class="control-label col-sm-2" for="apellido">Apellido</label>-->
<!--                                                <div class="col-sm-4">-->
<!--                                                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido Usuario" onkeypress="return soloLetras(event)">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!---->
<!--                                            <div class="form-group">-->
<!--                                                <label class="control-label col-sm-2" for="usuarioDireccion">Direcci&oacute;n</label>-->
<!--                                                <div class="col-sm-4">-->
<!--                                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            --><?php
//
//                                            $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
//                                            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
//                                            $fecha = date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
//                                            ?>
<!--                                            <div class="form-group">-->
<!--                                                <label class="control-label col-sm-2" for="fecha">Fecha de Ingreso</label>-->
<!--                                                <div class="col-sm-4">-->
<!--                                                    <input type="text" class="form-control" id="fechaingreso" name="fechaingreso" value="--><?php //echo $fecha?><!--" readonly="readonly">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!---->
<!--                                            <div class="form-group">-->
<!--                                                <label class="control-label col-sm-2" for="contrasena">Telefono</label>-->
<!--                                                <div class="col-sm-4">-->
<!--                                                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!---->
<!--                                            <div class="form-group">-->
<!--                                                <label class="control-label col-sm-2" for="confirmar_contrasena">Salario</label>-->
<!--                                                <div class="col-sm-4">-->
<!--                                                    <input type="text" name="salario" id="salario" class="form-control" onkeypress="return soloNumeros(event)" placeholder="$ Salario"  pattern="[0-9]" maxlength="15">-->
<!--                                                </div>-->
<!--                                            </div>-->

                                        </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                </div>
                                </form>

                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        Instructores
                    </div><!-- /.box-footer-->
                </div><!-- /.box -->

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <?php
    }
    /**
     *@funcion INSERTAR CLIENTES
     */
    function regi_instructores()
    {
        /** @var TYPE_NAME $identificacion */
        /** @var TYPE_NAME $nombre */
        /** @var TYPE_NAME $apellido */
        /** @var TYPE_NAME $salario */
        /** @var TYPE_NAME $direccion */
        /** @var TYPE_NAME $fecha */
        /** @var TYPE_NAME $telefono */
        $a = new Conexion();
        $modulo="instructores";
        $archivo="instructores";
        $accion="listar";
        date_default_timezone_set('America/Bogota');
        $fecha = date('y-m-d');
        extract($_POST);


        $datos = (" $identificacion,'$nombre','$apellido','$direccion','$telefono','$fecha',$salario ");
        $datos1 = ("Ins_Identificacion, Ins_Nombre, Ins_Apellido, Ins_Direccion, Ins_Telefono, Ins_Fecha_Registro, Ins_Salario, Ins_Estado");
        echo $sql = ("insert into nic_instructores($datos1) values ($datos,1)");
        $a->execute($sql);
        $a->mensaje_registro($modulo,$archivo,$accion);
    }
    /*
     *@funcion MODULOS LISTAR CLIENTES
     */
    function listar(){
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Instructores
                    <small>Del sistema</small>
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
                                <h3 class="box-title">Instructores</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>IDENTIFICACI&Oacute;N</th>
                                        <th>NOMBRE</th>
                                        <th>APELLIDO</th>
                                        <th>DIRECCION</th>
                                        <th>TELEFONO</th>
                                        <th>FECHA DE REGISTRO</th>
                                        <th>SALARIO</th>
                                        <th>ESTADO</th>
                                        <th>EDITAR</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $a= new Conexion();
                                    $sql=("select * from nic_instructores");
                                    $resul=$a->execute1($sql);
                                    while($rows=mysqli_fetch_array($resul))
                                    {
                                        ?>
                                        <tr>
                                            <td><?php echo $rows['Ins_Id']; ?></td>
                                            <td><?php echo $rows['Ins_Identificacion']; ?></td>
                                            <td><?php echo $rows['Ins_Nombre']; ?></td>
                                            <td><?php echo $rows['Ins_Apellido']; ?></td>
                                            <td><?php echo $rows['Ins_Direccion']; ?></td>
                                            <td><?php echo $rows['Ins_Telefono']; ?></td>
                                            <td><?php echo $rows['Ins_Fecha_Registro']; ?></td>
                                            <td><?php echo $rows['Ins_Salario']; ?></td>
                                            <td><?php
                                                if($rows['Ins_Estado'] == 1)
                                                {
                                                    echo "<span class='label label-success'>
                                                                <font class='h5'>Activo</font>";
                                                }else
                                                {
                                                    echo "<span class='label label-danger'>
                                                                <font class='h5'>Inactivo</font>";
                                                }
                                                ?>
                                            </td>
                                            <td><a class="glyphicon glyphicon-edit" href="<?php echo createrUrl("instructores", "instructores", "modificar"); ?>&Ins_Id=<?php echo $rows['Ins_Id']; ?>"></a></td>
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
    *@funcion MODULO MODIFICAR CLIENE
    */
    function modificar()
    {
        $ins_id=$_GET['Ins_Id'];
        $a = new Conexion();
        $sql=("select * from nic_instructores WHERE Ins_Id= $ins_id");
        $resul=$a->execute1($sql);
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
                        <a class="glyphicon glyphicon-arrow-left" href="<?php echo createrUrl("instructores", "instructores", "listar"); ?>"></a> <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>MODIFICAR USUARIOS</h3></center>
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
                                    <form name="ejemplo5" role="form" class="form-horizontal fv-form fv-form-bootstrap" method="post" autocomplete="off" action="<?php echo createrUrl("instructores", "instructores", "actualizar"); ?>" >
                                        <div class="box-body">
                                            <?php
                                            while($row=mysqli_fetch_array($resul))
                                            {
                                                $id=$row['Ins_Id']
                                                ?>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="usuarioIdentificacion">Identificaci&oacute;n</label>

                                                    <div class="col-sm-4">
                                                        <input type="text" value="<?php echo $row['Ins_Identificacion']?>" class="form-control" id="identificacion" name="identificacion" placeholder="Identificaci&oacute;n" required="required" readonly="readonly">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="usuarioNombre">Nombre</label>

                                                    <div class="col-sm-4">
                                                        <input type="text" value="<?php echo $row['Ins_Nombre']?>" class="form-control" id="nombre" name="nombre" placeholder="Nombre Usuario">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="usuarioApellido">Apellido</label>

                                                    <div class="col-sm-4">
                                                        <input type="text"  value="<?php echo $row['Ins_Apellido']?>"  class="form-control" id="apellido" name="apellido" placeholder="Apellido Usuario">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="usuarioDireccion">Direcci&oacute;n</label>

                                                    <div class="col-sm-4">
                                                        <input type="text"  value="<?php echo $row['Ins_Direccion']?>"  class="form-control" id="direccion" name="direccion" placeholder="Direccion">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="contrasena">Telefono</label>
                                                    <div class="col-sm-4">
                                                        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="<?php echo $row['Ins_Telefono']?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="confirmar_contrasena">Salario</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" name="salario" id="salario" class="form-control" onkeypress="return soloNumeros(event)" placeholder="$ Salario" value="<?php echo $row['Ins_Salario']?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="usuarioEstado">Cambiar Estado</label>

                                                    <div class="col-sm-4">
                                                        <?php
                                                        if ($row['Ins_Estado']==1 )
                                                        {
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
                                                        }
                                                        else
                                                        {
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
                                                <?php
                                            }
                                            ?>
                                        </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" name="Ins_Id" value="<?php echo $id?>" class="btn btn-primary">Modificar</button>
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
     *@funcion ACTUALIZAR INSTRUCTORES
     */
    function actualizar()
    {
        /** @var TYPE_NAME $identificacion */
        /** @var TYPE_NAME $Ins_Id */
        /** @var TYPE_NAME $nombre */
        /** @var TYPE_NAME $apellido */
        /** @var TYPE_NAME $salario */
        /** @var TYPE_NAME $direccion */
        /** @var TYPE_NAME $telefono */
        /** @var TYPE_NAME $estado */
        /** @var TYPE_NAME $valor5 */
        /** @var TYPE_NAME $valor6 */
        $a = new Conexion();
        $modulo="instructores";
        $archivo="instructores";
        $accion="listar";
        extract($_POST);
        $datos = ("$Ins_Id,$identificacion,'$nombre','$apellido','$direccion','$telefono',$salario ");
        if ($valor5=='Activo')
        {
            echo $sql1=("update nic_instructores set Ins_Identificacion=$identificacion, Ins_Nombre='$nombre', Ins_Apellido='$apellido',Ins_Direccion='$direccion',Ins_Telefono='$telefono', Ins_Salario=$salario WHERE Ins_Id=$Ins_Id");
            $a->execute($sql1);
            $a->mensaje_actualizar($modulo,$archivo,$accion);
        }
        elseif ($valor5=="Inactivo")
        {
            $estadoInactivo5="2";
            echo $sql=("update nic_instructores set Ins_Identificacion=$identificacion, Ins_Nombre='$nombre', Ins_Apellido='$apellido',Ins_Direccion='$direccion',Ins_Telefono='$telefono', Ins_Salario=$salario, Ins_Estado=$estadoInactivo5 WHERE Ins_Id=$Ins_Id");
            $a->execute($sql);
            $a->mensaje_actualizar($modulo,$archivo,$accion);
        }
        elseif($valor6=="Inactivo")
        {
            echo  $sql1=("update nic_instructores set Ins_Identificacion=$identificacion, Ins_Nombre='$nombre', Ins_Apellido='$apellido',Ins_Direccion='$direccion',Ins_Telefono='$telefono', Ins_Salario=$salario WHERE Ins_Id=$Ins_Id");
            $a->execute($sql1);
            $a->mensaje_actualizar($modulo,$archivo,$accion);
        }
        elseif($valor6=="Activo"){
            $estadoInactivo6="1";
            echo  $sql=("update nic_instructores set Ins_Identificacion=$identificacion, Ins_Nombre='$nombre', Ins_Apellido='$apellido',Ins_Direccion='$direccion',Ins_Telefono='$telefono', Ins_Salario=$salario, Ins_Estado=$estadoInactivo6 WHERE Ins_Id=$Ins_Id");
            $a->execute($sql);
            $a->mensaje_actualizar($modulo,$archivo,$accion);
        }


    }


}