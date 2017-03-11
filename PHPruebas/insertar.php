<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
include("conexion.php");
if (!empty($_POST["nombre"]) && isset($_POST["nombre"]) && !empty($_POST["apellido"]) && isset($_POST["apellido"]) && !empty($_POST["telefono"]) && isset($_POST["telefono"])) {
	$con = mysql_connect($host,$user,$pw,$db) or die ("Problemas al conectar" . mysql_error());
	mysql_select_db($db,$con) or die ("Problemas al conectar a la DB" . mysql_error());
	mysql_query("Insert into cliente (nombre,apellido,telefono) values ('$_POST[nombre]','$_POST[apellido]','$_POST[telefono]')",$con ) or die("error al momento de guardar ". mysql_error());
		echo "datos Guardados";
}else{
	echo "error con la variable";
}

 ?>
 <br>
 <a href="buscarRegistros.php" title="buscar" target="_blank">Ir a buscar</a>
</body>
</html>
