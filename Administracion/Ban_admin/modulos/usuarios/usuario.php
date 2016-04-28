<?php
/**
 * Created by IntelliJ IDEA.
 * @User: luis
 * @Date: 23/02/2016
 * @Time: 08:21 PM
 */

/**
 *
 */
include_once 'head.php';

/**
 * Class usuarios_usuario
 * @package Administracion\Gym_admin\modulos\usuarios
 */
class usuarios_usuario{
    /**
     * MODULO REGISTRAR USUARIOS
     */
    function registrar()
    {
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
                       <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>REGISTRO DE USUARIOS</h3></center>
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
                                    <form  id="signupForm1" class="form-horizontal" method="post" autocomplete="off" action="<?php echo createrUrl("usuarios", "usuario", "regi_usuario"); ?>" >
                                        <div class="box-body">

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="identificacion">Identificaci&oacute;n</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Identificaci&oacute;n" onkeypress="return soloNumeros(event)">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="nombre">Nombre</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Usuario" onkeypress="return soloLetras(event)">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="apellido">Apellido</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido Usuario" onkeypress="return soloLetras(event)">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="usuarioDireccion">Direcci&oacute;n</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="correo">Correo</label>
                                                <div class="col-sm-4">
                                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="contrasena">Contraseña</label>
                                                <div class="col-sm-4">
                                                    <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="confirmar_contrasena">Comfirmar Contraseña</label>
                                                <div class="col-sm-4">
                                                    <input type="password" class="form-control" id="confirmar_contrasena" name="confirmar_contrasena" placeholder="Contraseña">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="usuarioTipo">Tipo Usuario</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="tipo_usuario" id="tipo_usuario">

                                                        <?php
                                                        $a = new Conexion();
                                                       $sql=("select * from nic_tipo_usuario");
                                                        $res=$a->execute1($sql);
                                                        while($rows=mysqli_fetch_assoc($res))
                                                        {
                                                          echo "<option value='".$rows['Tip_Id']."'><font><font>".$rows['Tip_Nombre']."</font></font></option>";
                                                        }
                                                        ?>

                                                    </select>
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
                        Usuarios
                    </div><!-- /.box-footer-->
                </div><!-- /.box -->

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <?php
    }
    /**
     *INSERTAR USUARIOS
     */
    function regi_usuario()
    {
        /** @var TYPE_NAME $identificacion */
        /** @var TYPE_NAME $nombre */
        /** @var TYPE_NAME $apellido */
        /** @var TYPE_NAME $contrasena */
        /** @var TYPE_NAME $direccion */
        /** @var TYPE_NAME $correo */
        /** @var TYPE_NAME $tipo_usuario */
        /** @var TYPE_NAME $confirmar_contrasena */
        $a = new Conexion();
        $modulo="usuarios";
        $archivo="usuario";
        $accion="listar";
        extract($_POST);
        if ($contrasena == $confirmar_contrasena)
        {
            $datos = (" $identificacion,'$nombre','$apellido','$direccion','$correo',$tipo_usuario");
            $contrasena_comfirmada = md5($contrasena);
            $datos1 = ("Usu_Identificacion, Usu_Nombre, Usu_Apellido, Usu_Direccion, Usu_Correo, Tip_Id, Usu_Password,Usu_Estado");
            echo $sql = ("insert into nic_usuario ($datos1) values ($datos,'$contrasena_comfirmada',1)");
            $a->execute($sql);
            $a->mensaje_registro($modulo,$archivo,$accion);
        }
    }
    /*
     *MODULOS LISTAR USUARIOS
     */
    function listar(){
     ?>
        <!-- Content Wrapper. Contains page content -->
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
                <div class="row">
                    <div class="col-xs-12">
                        
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Usuarios</h3>
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
                                        <th>CORREO</th>
                                        <th>TIPO USUARIO</th>
                                        <th>ESTADO</th>
                                        <th>EDITAR</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $a= new Conexion();
                                    $sql=("select * from nic_usuario");
                                    $resul=$a->execute1($sql);
                                    while($rows=mysqli_fetch_array($resul))
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $rows['Usu_Id']; ?></td>
                                        <td><?php echo $rows['Usu_Identificacion']; ?></td>
                                        <td><?php echo $rows['Usu_Nombre']; ?></td>
                                        <td><?php echo $rows['Usu_Apellido']; ?></td>
                                        <td><?php echo $rows['Usu_Direccion']; ?></td>
                                        <td><?php echo $rows['usu_Correo']; ?></td>
                                        <td><?php echo $rows['Tip_Id']; ?></td>
                                        <td><?php
                                                if($rows['Usu_Estado'] == 1)
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
                                        <td><a class="glyphicon glyphicon-edit" href="<?php echo createrUrl("usuarios", "usuario", "modificar"); ?>&Usu_Id=<?php echo $rows['Usu_Id']; ?>"></a></td>
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
     *MODULO MODIFICAR USUARIOS
     */
    function modificar()
    {
        $usu_id=$_GET['Usu_Id'];
        $a = new Conexion();
        $sql=("select * from nic_usuario WHERE Usu_Id= $usu_id");
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
                        <a class="glyphicon glyphicon-arrow-left" href="<?php echo createrUrl("usuarios", "usuario", "listar"); ?>"></a> <center> <h3 class="box-title"><i class="fa fa-users fa-2x"></i>MODIFICAR USUARIOS</h3></center>
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
                                    <form name="ejemplo5" role="form" class="form-horizontal fv-form fv-form-bootstrap" method="post" autocomplete="off" action="<?php echo createrUrl("usuarios", "usuario", "actualizar"); ?>" >
                                        <div class="box-body">
                                            <?php
                                            while($row=mysqli_fetch_array($resul))
                                            {
                                                $id=$row['Usu_Id']
                                            ?>

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="usuarioIdentificacion">Identificaci&oacute;n</label>

                                                <div class="col-sm-4">
                                                    <input type="text" value="<?php echo $row['Usu_Identificacion']?>" class="form-control" id="identificacion" name="identificacion" placeholder="Identificaci&oacute;n" required="required" readonly="readonly">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="usuarioNombre">Nombre</label>

                                                <div class="col-sm-4">
                                                    <input type="text" value="<?php echo $row['Usu_Nombre']?>" class="form-control" id="nombre" name="nombre" placeholder="Nombre Usuario">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="usuarioApellido">Apellido</label>

                                                <div class="col-sm-4">
                                                    <input type="text"  value="<?php echo $row['Usu_Apellido']?>"  class="form-control" id="apellido" name="apellido" placeholder="Apellido Usuario">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="usuarioDireccion">Direcci&oacute;n</label>

                                                <div class="col-sm-4">
                                                    <input type="text"  value="<?php echo $row['Usu_Direccion']?>"  class="form-control" id="direccion" name="direccion" placeholder="Direccion">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="usuarioCorreo">Correo</label>

                                                <div class="col-sm-4">
                                                    <input type="email"  value="<?php echo $row['Usu_Correo']?>"  class="form-control" id="correo" name="correo" placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="usuarioTipo">TipoUsuario</label>

                                                <div class="col-sm-4">
                                                    <select class="form-control" name="tipo_usuario" id="tipo_usuario">

                                                        <?php
                                                        $a = new Conexion();
                                                        $sql = ("select * from nic_tipo_usuario");
                                                        $res = $a->execute1($sql);
                                                        while ($rows = mysqli_fetch_assoc($res))
                                                        {
                                                         $ti=$row['Tip_Id' ];
                                                          if($ti == $rows['Tip_Id'])
                                                             {
                                                                echo  "<option value='" . $rows['Tip_Id'] . "' selected ><font><font>" . $rows['Tip_Nombre'] . "</font></font></option>";
                                                             }else
                                                               {
                                                                  echo "<option value='" . $rows['Tip_Id'] . "'><font><font>" . $rows['Tip_Nombre'] . "</font></font></option>";
                                                               }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="usuarioEstado">Cambiar Estado</label>

                                                <div class="col-sm-4">
                                                    <?php
                                                    if ($row['Usu_Estado']==1 )
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
                                    <button type="submit" name="Usu_Id" value="<?php echo $id?>" class="btn btn-primary">Modificar</button>
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
     *ACTUALIZAR USUARIOS
     */
    function actualizar()
    {
        /** @var TYPE_NAME $Usu_Id */
        /** @var TYPE_NAME $identificacion */
        /** @var TYPE_NAME $nombre */
        /** @var TYPE_NAME $apellido */
        /** @var TYPE_NAME $password */
        /** @var TYPE_NAME $direccion */
        /** @var TYPE_NAME $correo */
        /** @var TYPE_NAME $tipo_usuario */
        /** @var TYPE_NAME $estado */
        /** @var TYPE_NAME $valor5 */
        /** @var TYPE_NAME $valor6 */
        $a = new Conexion();
        $modulo="usuarios";
        $archivo="usuario";
        $accion="listar";
        extract($_POST);
        $datos = ("$Usu_Id,$identificacion,'$nombre','$apellido','$direccion','$correo',$tipo_usuario ");
        if ($valor5=='Activo')
        {
            $sql1=("update nic_usuario set Usu_Identificacion=$identificacion, Usu_Nombre='$nombre', Usu_Apellido='$apellido',Usu_Direccion='$direccion',Usu_Correo='$correo', Tip_Id=$tipo_usuario WHERE Usu_Id=$Usu_Id");
            $a->execute($sql1);
            $a->mensaje_actualizar($modulo,$archivo,$accion);
        }
        elseif ($valor5=="Inactivo")
        {
            $estadoInactivo5="2";
            $sql=("update nic_usuario set Usu_Identificacion=$identificacion, Usu_Nombre='$nombre', Usu_Apellido='$apellido',Usu_Direccion='$direccion',Usu_Correo='$correo', Tip_Id=$tipo_usuario, Usu_Estado=$estadoInactivo5 WHERE Usu_Id=$Usu_Id");
            $a->execute($sql);
            $a->mensaje_actualizar($modulo,$archivo,$accion);
        }
        elseif($valor6=="Inactivo")
        {
            $sql1=("update nic_usuario set Usu_Identificacion=$identificacion, Usu_Nombre='$nombre', Usu_Apellido='$apellido',Usu_Direccion='$direccion',Usu_Correo='$correo', Tip_Id=$tipo_usuario WHERE Usu_Id=$Usu_Id");
            $a->execute($sql1);
            $a->mensaje_actualizar($modulo,$archivo,$accion);
        }
        elseif($valor6=="Activo"){
            $estadoInactivo6="1";
            $sql=("update nic_usuario set Usu_Identificacion=$identificacion, Usu_Nombre='$nombre', Usu_Apellido='$apellido',Usu_Direccion='$direccion',Usu_Correo='$correo', Tip_Id=$tipo_usuario, Usu_Estado=$estadoInactivo6 WHERE Usu_Id=$Usu_Id");
            $a->execute($sql);
            $a->mensaje_actualizar($modulo,$archivo,$accion);
        }


    }

}
