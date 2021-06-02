
<?php
		$conexion = mysqli_connect("localhost", "root", "", "suremanagement") or die ("Problemas en la conexión");
		$repnom = mysqli_query( $conexion, "SELECT usuario FROM usuarios where usuario='$_REQUEST[user]';");
		#
		#
		if (mysqli_num_rows($repnom)> 0){
			echo ('Usuario ya existente');
		}else if ($conexion = mysqli_connect("localhost", "root", "", "suremanagement")){
			mysqli_query($conexion, "INSERT INTO usuarios(nombres,apellidos,usuario,contraseña,email) VALUES('$_REQUEST[nom]','$_REQUEST[ape]', '$_REQUEST[user]','$_REQUEST[pass]', '$_REQUEST[correo]')")or die ("Problemas en el select" . mysqli_error($conexion));
			echo 'El usuario ha sido creado correctamente';
		}	
		mysqli_close($conexion);
?>


