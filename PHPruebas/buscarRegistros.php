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
	$con = mysql_connect($host,$user,$pw) or die ("Problemas al conectar" . mysql_error());

	mysql_select_db($db,$con) or die ("Problemas al conectar a la DB" . mysql_error());

	$registro = mysql_query("Select * from cliente",$con) or die("Problemas para acceder a la DB ". mysql_error());

	while ($reg = mysql_fetch_array($registro)) {
			echo $reg["nombre"]."<br>";
			echo $reg["apellido"]."<br>";
			echo $reg["telefono"]."<br>";
			echo "-------------------"."<br>";		
		}
	 ?>

</body>
</html>