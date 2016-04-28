<?php
//@session_start();
//if($_SESSION['rol']==1 || $_SESSION['rol']==3)
//{

	//Incluimos el FrontController
	require_once '../../librerias/LoaderMod.php';

	//Lo iniciamos con su método estático main.
	LoaderMod::main();

//}
//else
//{
//	echo '<script type="text/javascript">
//		window.location.href="../../salir.php";
//	</script>';
//}
?>