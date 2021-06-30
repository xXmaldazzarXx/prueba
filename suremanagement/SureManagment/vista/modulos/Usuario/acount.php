<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/0ac953f94e.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    </head>
    <body>
    <?php
    include("conexion.php");
	//Verificamos la presencia de los datos esperados
	if (isset($_POST["nom"], $_POST["ape"], $_POST["pass"], $_POST["user"], $_POST["email"])){
		if ($conn = conectarBase($host,$usuario,$clave,$base)){
			//Evitamos problemas con codificaciones
			@mysqli_query($conn,"SET NAMES 'UTF-8'");
			//Traspasamos a variables locales para evitar problemas con
            $codigo = $_SESSION["usersec"];
			$nombre = $_POST["nom"];
            $apellido = $_POST["ape"];
            $pass = $_POST["pass"];
            $user = $_POST["user"];
			$email = $_POST["email"];
			$consulta = "UPDATE suremanagement
			SET nombres ='$nombre',
            apellidos ='$apellido', usuario='$user', contraseña='$pass', email='$email' 
            WHERE id_estudiante='$codigo'";
			if (mysqli_query($conn,$consulta)){
				echo "El usuario se ha actualizado exitosamente";
			}else{
                echo "No se ha podido actualizar el usuario";
            }
            }
            else{
                echo "Servicio interrumpido";
            }
            }
        else{
            echo "No se ha indicado el registro a modificar";
        }
	?>  
    </body>
</html>