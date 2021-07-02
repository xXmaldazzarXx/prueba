<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    session_start();
    $sec = $_SESSION['usersec'];
    $con = mysqli_connect("localhost","root","","suremanagement");
    $cons = mysqli_query($con,"SELECT * FROM usuarios WHERE usuario = '$sec' ");
    if(isset($cons)){
    while($reg = mysqli_fetch_array($cons)){
        $nsec = $reg['id_usuario'];
        $_SESSION['newnum'] = $nsec;
        $abcdefg = $_SESSION['newnum'];
    }
    }
    ?>
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
        @mysqli_query($conn,"SET NAMES 'UTF-8'");
        $codigo = $abcdefg;
        $nombre = $_POST["nom"];
        $apellido = $_POST["ape"];
        $pass = $_POST["pass"];
        $user = $_POST["user"];
        $email = $_POST["email"];
        $consulta = mysqli_query($conn,"UPDATE usuarios
        SET nombres ='$nombre',
        apellidos ='$apellido', usuario='$user', contraseña='$pass', email='$email' 
        WHERE id_usuario='$codigo'");
        echo "Se ha actualizado el usuario";
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