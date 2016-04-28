<?php
include("../../../../../librerias/Conexion.php");
$objCon = new Conexion();
$valor = $_POST['Dep_Id'];

$con="select c.Ciu_Nombre FROM ban_ciudad c JOIN ban_departamento b
ON c.Dep_Id = b.Dep_Id
WHERE b.Dep_Id='$valor'"; //consulta para seleccionar las palabras a buscar, esto va a depender de su base de datos
$consultaUsuario = $objCon->execute($con);
$conteo = COUNT($consultaUsuario);
$k = 0;
?>
<option value="">Seleccione el Ciudad</option>
<?php
while ($k < $conteo) {
    echo "<option value='" . $consultaUsuario[$k][0] . "'>" . $consultaUsuario[$k][0] . "</option>";
    $k++;
}