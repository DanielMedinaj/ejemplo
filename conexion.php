<?php
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	//Este es un nuevo comentario
	$mysqli=new mysqli("localhost","root","321dma123#","aquafix"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>