<header class="main-header">

    <!-- Logo -->
    <a href="../../Administracion/Ban_admin" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>TB</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Sistema</b> Banco</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-red"></i> 5 new members joined
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-red"></i> You changed your username
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="../../dist/img/user.png" class="user-image" alt="User Image"/>
                        <span class="hidden-xs">USUARIO</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="../../dist/img/user.png" class="img-circle" alt="User Image" />
                            <p>
                                NOMBRE DE USUARIO CON SU TIPO DE USUARIO
                                <small>FECHA SISTEMA</small>
                            </p>
                        </li>
                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <!-- Aqui viene el index.php?-->
                                <a href="../../" class="btn btn-default btn-flat">Cerrar Session</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>

    </nav>
</header>
<!--la columna del lado izquierdo. contiene el logotipo y la barra lateral -->
<aside class="main-sidebar">
    <!-- Recuadro: el estilo se puede encontrar en sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../../dist/img/user.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>.............</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MEN&Uacute; PRINC&Iacute;PAL</li>
            <!-- USUARIOS GYM ADMO -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>CUENTAS</span>
                    <span class="label label-primary pull-right ion-star"> </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo createrUrl("cuentas", "cuentas", "registrar"); ?>"><i class="ion ion-arrow-right-b"></i>REGISTRAR</a></li>
                     <li><a href="#"><i class="ion ion-arrow-right-b"></i>CONSULTAR<i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo createrUrl("cuentas", "cuentas", "listar"); ?>"><i class="ion ion-arrow-right-b"></i>PERSONAS NATURALES</a></li>
                            <li><a href="<?php echo createrUrl("cuentas","cuentas_empresas","listar"); ?>"><i class="ion ion-arrow-down-b"></i>PERSONAS JURIDICAS</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- INSTRUCTORES GYM  -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>PAGOS</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo createrUrl("pagos", "pagos", "registrar"); ?>"><i class="fa fa-circle-o"></i>REGISTRAR</a></li>
                    <li><a href="<?php echo createrUrl("pagos", "pagos", "listar"); ?>"><i class="fa fa-circle-o"></i>CONSULTAR</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>