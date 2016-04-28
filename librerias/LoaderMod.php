<?php
error_reporting();
//@session_start();

class LoaderMod {

    static function main() {
        //Incluimos algunas clases:
        require_once "../../librerias/Config.php"; // Clase de configuracion
        require_once '../../librerias/Disenno.php'; // diseño del sistema
        require_once '../../librerias/funciones.php'; // funciones genéricas
        require_once '../../librerias/Conexion.php'; // Conexion genérica
        //Incluimos configuraciones del sistema

        require_once 'config.php'; //Archivo con configuraciones
        // Modulos
        if (!empty($_GET['modulo'])) {
            $modulo = $_GET['modulo'];
        } else {
            $modulo = "/";
//            echo  "solo el loadermod";
        } // else
        //Formamos el nombre del Archivo
        if (!empty($_GET['archivo'])) {
            $archivoName = $_GET['archivo'];
            if ($modulo == "/") {
                $className = "Index_" . $archivoName;
            } else {
                $className = ucwords($modulo) . "_" . $archivoName;
            }
        } // if
        //Lo mismo sucede con las acciones, si no hay acción, tomamos index como acción
        if (!empty($_GET['accion'])) {
            $actionName = $_GET['accion'];
        } else {
            $actionName = "index";
//            echo 'archivo';
        }
        if ($modulo == "/") {
            @$archivoPath = $archivoName . '.php';
        } else {
            $archivoPath = "modulos/" . $modulo . "/" . $archivoName . '.php';
//            echo 'archivo2';

        } // else
        // Incluimos clase para manejar la plantilla del sistema
        $disenno = new Disenno();
        $disenno->displayHeader();
        //Incluimos el fichero que contiene nuestra clase del archivo solicitado

        if (is_file($archivoPath)) {
            require_once $archivoPath;
        } else {
            ?>

            <?php
            $error = true;
        }
        // else
        //Si no existe la clase que buscamos y su acción, mostramos un error 404
        if (is_callable(array(@$className, @$actionName)) == false) {
            ?>
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        404 Error Page
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Examples</a></li>
                        <li class="active">404 error</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="error-page">
                        <h2 class="headline text-yellow"> 404 2</h2>
                        <div class="error-content">
                            <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
                            <p>
                                We could not find the page you were looking for.
                                Meanwhile, you may <a href='../../index.html'>return to dashboard</a> or try using the search form.
                            </p>
                            <form class='search-form'>
                                <div class='input-group'>
                                    <input type="text" name="search" class='form-control' placeholder="Search"/>
                                    <div class="input-group-btn">
                                        <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i></button>
                                    </div>
                                </div><!-- /.input-group -->
                            </form>
                        </div><!-- /.error-content -->
                    </div><!-- /.error-page -->
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
            <?php
            $error = true;
        }
        // else
        if (!@$error) {
            //Si todo esta bien, creamos una instancia de la clase y llamamos a la acción
            $class = new $className();
            $class->$actionName();
        } // if
        $disenno->displayFooter();
        $disenno->displayContent();
    }

}
