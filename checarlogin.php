
<?php

/* start the session */
	session_start();

?>

	<?php

 		
		// Connect to server and select databse.
	//esTE ES UN NUEVO COMENTARIO

		$link= mysqli_connect("localhost","root","321dma123#","aquafix");
		if (!$link) {
		    printf("Can't connect to localhost. Error: %s\n", mysqli_connect_error());
		    exit();
		}


		// sent from form
		$username = $_POST['usuario'];
		$password = md5($_POST['contrasena']);

		$sql= "SELECT * FROM usuarios WHERE Usuario = '$username' and Password='$password' ";

	
		if ($result = mysqli_query($link,$sql)) {

		    /* determinar el número de filas del resultado */
		    $count = mysqli_num_rows($result);

		}
		else{
			echo("Error description: " . mysqli_error($link));
		}
		
		// counting table row
	
	// Si resultados $username y $password

	if($count == 1){

		$_SESSION['loggedin'] = true;
 		$_SESSION['username'] = $username;


        // se hace el ciclo para leer los nombres de los campos de la tabla seleccionada (usuario)
         if($datos= mysqli_fetch_array($result)){

            $id = $datos['Consec'];

        		}

 			$_SESSION['id_usuarioMega']= $id;
 			
				echo"Acceso";
				
		}

	else {
		echo"Denegado";

		}
	?>

