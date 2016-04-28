<?php

/**
 * Created by IntelliJ IDEA.
 * User: luis
 * Date: 18/03/2016
 * Time: 03:16 PM
 */

/**
 *
 */
include_once 'head.php';
/**
 * Class tipo_usuarios_tipo_usuario
 * @package Administracion\Gym_admin\modulos\tipo_usuarios
 */
class tipo_usuarios_tipo_usuarios
{
    /**
     * MODULO REGISTRAR TIPO DE USUARIOS
     */
    function registrar()
    {
        ?>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Tipo de Usuarios
                    <small>del sistema</small>
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
                        <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>REGISTRO DE TIPO DE USUARIOS</h3></center>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                            <!--                            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>-->
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
                                    <form  id="signupForm1" class="form-horizontal" method="post" autocomplete="off" action="<?php echo createrUrl("tipo_usuarios", "tipo_usuarios", "regi_tipo_usuario"); ?>" >
                                        <div class="box-body">

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="nombre">Nombre</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Usuario" onkeypress="return soloLetras(event)">
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
                    <div class="box-footer">
                        Tipo de Usuarios
                    </div><!-- /.box-footer-->
                </div><!-- /.box -->

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <?php
    }
    /**
     *INSERTAR TIPO DE USUARIOS
     */
    function regi_tipo_usuario()
    {
        /** @var TYPE_NAME $nombre */
        $a = new Conexion();
        $modulo="tipo_usuarios";
        $archivo="tipo_usuarios";
        $accion="listar";
        extract($_POST);
            $datos = (" '$nombre' ");
            $datos1 = ("Tip_Nombre");
            echo $sql = ("insert into nic_tipo_usuario ($datos1) values ($datos)");
            $a->execute($sql);
            $a->mensaje_registro($modulo,$archivo,$accion);
    }
    /*
     *MODULOS LISTAR TIPO DE USUARIOS
     */
    function listar(){
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Tipo de Usuarios
                    <small>del sistema</small>
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
                                <h3 class="box-title">TIPOS DE USUARIOS</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NOMBRE</th>
                                        <th>EDITAR</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $a= new Conexion();
                                    $sql=("select * from nic_tipo_usuario");
                                    $resul=$a->execute1($sql);
                                    while($rows=mysqli_fetch_array($resul))
                                    {
                                        ?>
                                        <tr>
                                            <td><?php echo $rows['Tip_Id']; ?></td>
                                            <td><?php echo $rows['Tip_Nombre']; ?></td>
                                            <td><a class="glyphicon glyphicon-edit" href="<?php echo createrUrl("tipo_usuarios", "tipo_usuarios", "modificar"); ?>&Tip_Id=<?php echo $rows['Tip_Id']; ?>"></a></td>
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
     *MODULO MODIFICAR TIPO DE USUARIOS
     */
    function modificar()
    {
        $tip_id=$_GET['Tip_Id'];
        $a = new Conexion();
        $sql=("select * from nic_tipo_usuario WHERE Tip_Id= $tip_id");
        $resul=$a->execute1($sql);
        ?>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Tipos de Usuarios
                    <small>del sistema</small>
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
                        <a class="glyphicon glyphicon-arrow-left" href="<?php echo createrUrl("tipo_usuarios", "tipo_usuarios", "listar"); ?>"></a> <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>MODIFICAR TIPOS DE USUARIOS</h3></center>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                            <!--                            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>-->
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
                                    <form id="signupForm1" name="ejemplo5" role="form" class="form-horizontal fv-form fv-form-bootstrap" method="post" autocomplete="off" action="<?php echo createrUrl("tipo_usuarios", "tipo_usuarios", "actualizar"); ?>" >
                                        <div class="box-body">
                                            <?php
                                            while($row=mysqli_fetch_array($resul))
                                            {
                                                $id=$row['Tip_Id']
                                                ?>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="usuarioNombre">Nombre</label>

                                                    <div class="col-sm-4">
                                                        <input type="text" value="<?php echo $row['Tip_Nombre']?>" class="form-control" id="nombre" name="nombre" placeholder="Nombre Usuario" onkeypress="return soloLetras(event)">
                                                    </div>
                                                </div>

                                                <?php
                                            }
                                            ?>
                                        </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" name="Tip_Id" value="<?php echo $id?>" class="btn btn-primary">Modificar</button>
                                </div>
                                </form>
                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        Tipo de Usuarios
                    </div><!-- /.box-footer-->
                </div><!-- /.box -->

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <?php
    }
    /*
     *ACTUALIZAR TIPO DE USUARIOS
     */
    function actualizar()
    {
        /** @var TYPE_NAME $Tip_Id */
        /** @var TYPE_NAME $nombre */

        $a = new Conexion();
        $modulo="tipo_usuarios";
        $archivo="tipo_usuarios";
        $accion="listar";
        extract($_POST);
        $datos = ("$Tip_Id,'$nombre' ");

            $sql1=("update nic_tipo_usuario set Tip_Nombre='$nombre' WHERE Tip_Id=$Tip_Id");
            $a->execute($sql1);

            $a->mensaje_actualizar($modulo,$archivo,$accion);
    }


}