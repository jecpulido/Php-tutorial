<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		input{padding: 3px;margin: 3px;}
		textarea{width: 80%}
	</style>
</head>
<body>
	<form action="crearArchivo.php" method="POST" accept-charset="utf-8">
	<center>
		<div style="margin: 2px;border: 2px solid;text-align: center; width: 30%; align-content: center;border-radius: 7px">
			<h3>NOTICIAS</h3>
			<output>Titulo</output><br>
			<input type="text" name="titulo" style="width: 80%"/><br>
			<output>Comentario</output><br>
			<textarea name="comentario"></textarea><br>
			<input type="submit" name="enviar" value="Enviar">
		</div>
	</center>
	</form>
	<?php 
	phpinfo(); ?>
</body>
</html>