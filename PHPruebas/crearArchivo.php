<?php 
	$_folder = fopen("titulo.txt", "a");
	$titulo = $_POST["titulo"];
	$comentario = $_POST["comentario"];

	fwrite($_folder, $titulo.= PHP_EOL);
	fwrite($_folder, $comentario);
	fclose($_folder);
	echo "ARCHIVO creado";

 ?>