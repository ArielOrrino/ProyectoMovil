<?php 

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$conexion=mysqli_connect("localhost", "admin", "admin", "cooperativa");
//$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'"
//$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if ($filas>0) {
	header("location:");
} else { echo "Error en la autenticacion" }

mysqli_free_result($resultado);
mysqli_close($conexion);