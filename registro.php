<?php
	
	session_start();
	require 'conexion.php';
	
	if(!isset($_SESSION["id_usuario"])){
		header("Location: Clientes.php");
	}
	
	$sql = "SELECT idCliente FROM cliente";
	$result=$mysqli->query($sql);
	
	$bandera = false;
	
	if(!empty($_POST))
	{
		$Nombre = mysqli_real_escape_string($mysqli,$_POST['nombre']);
		$Apellidos = mysqli_real_escape_string($mysqli,$_POST['apellido']);
		$noTel = mysqli_real_escape_string($mysqli,$_POST['telefono']);
		$Correo = mysqli_real_escape_string($mysqli,$_POST['correo']);
		$Domicilio = mysqli_real_escape_string($mysqli,$_POST['domicilio']);
		
		
		$error = '';
		
					
				
		$sqlUsuario = "INSERT INTO cliente (Nombre, Apellidos, noTel, Correo, Domicilio) VALUES('$Nombre','$Apellidos','$noTel','$Correo','$Domicilio')";
			$resultUsuario = $mysqli->query($sqlUsuario);
			
			if($resultUsuario>0)
			$bandera = true;
			else
			$error = "Error al Registrar";
		}
	
?>
