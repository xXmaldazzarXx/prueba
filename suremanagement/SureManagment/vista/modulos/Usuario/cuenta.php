<!DOCTYPE html>
<html lang='es'>
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
    <title>Usuario</title>
    <script src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript"></script>
    <!-- Favicons -->
    <link href="../../../img/about/LogoSM.png" rel="icon">
    <link href="../../../img/about/LogoSM.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="styleuser.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://kit.fontawesome.com/0ac953f94e.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/0ac953f94e.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
    include("conexion.php");
    if($conexion=conectarBase($host, $usuario, $clave, $base)){
        $nombre= mysqli_query($conexion,"SELECT nombres, apellidos
        FROM usuarios
        WHERE id_usuario='$abcdefg'");
        if($rn=mysqli_fetch_array($nombre)){
            $vnombre = $rn['nombres'];
            $vapellido = $rn['apellidos'];
        }
        $usuario= mysqli_query($conexion,"SELECT usuario
        FROM usuarios
        WHERE id_usuario='$abcdefg'");  
        if($rn=mysqli_fetch_array($usuario)){
            $vusuario = $rn['usuario'];
        }
        $pass= mysqli_query($conexion,"SELECT contraseña
        FROM usuarios
        WHERE id_usuario='$abcdefg'");  
        if($rn=mysqli_fetch_array($pass)){
            $vpass = $rn['contraseña'];
        }
        $email= mysqli_query($conexion,"SELECT email
        FROM usuarios
        WHERE id_usuario='$abcdefg'"); 
        if($rn=mysqli_fetch_array($email)){
            $vemail = $rn['email'];
        }
    }
    else{
        echo "<p> El estudiante no se encuentra registrado. </p>";
    } 
    ?>
    <div class="form">
        <div class="container">
            <table id="cuenta">
                <th colspan="5"><h1>Cuenta de usuario</h1></th>
                <tr>
                    <td rowspan="4"><a href="#"><i class="fas fa-address-book"></i></a></td>
                    <td style="text-align: left">Nombre:</td>
                    <td style="text-align: left"><?php echo $vnombre.' '.$vapellido?></td> 
                    <td style="text-align: left">Usuario:</td>
                    <td style="text-align: left"><?php echo $vusuario?></td>
                </tr>
                <tr>
                    <td style="text-align: left">Contraseña:</td>
                    <td style="text-align: left"><?php echo $vpass?></td>
                    <td style="text-align: left">Email:</td>
                    <td style="text-align: left"><?php echo $vemail?></td>
                </tr>
            </table>
        </div>
        <div class="edit">
            <table>
                <th colspan="2"><h1>¿Qué deseas hacer?</h1></th>
                <form id="formulario" action="acount.php" method="post" onsubmit="return validate(this)">
                    <tr>
                        <td style="text-align: right">Cambiar nombres:</td>
                        <?php echo '<td style="text-align: right"><input class="user-input" type="text" value="'.$vnombre.'" name="nom" required></td>'?>
                    </tr>
                    <tr>
                        <td style="text-align: right">Cambiar apellidos:</td>
                        <?php echo '<td style="text-align: right"><input class="user-input" type="text" value="'.$vapellido.'" name="ape" required></td>'?>
                    </tr>
                    <tr>
                        <td style="text-align: right">Cambiar usuario:</td>
                        <?php echo '<td style="text-align: right"><input class="user-input" type="text" value="'.$vusuario.'" name="user" required></td>'?>
                    </tr>
                    <tr>
                        <td style="text-align: right">Cambiar contraseña:</td>
                        <?php echo'<td style="text-align: right"><input class="user-input" type="text" value="'.$vpass.'" name="pass" required></td>'?>
                    </tr>
                    <tr>
                        <td style="text-align: right">Cambiar email:</td>
                        <?php echo '<td style="text-align: right"><input class="user-input" type="text" value="'.$vemail.'" name="email" required></td>'?>
                    </tr>
                    <tr>
                        <td colspan="2"><input id="reg" type="submit" value="ACTUALIZAR" required></td>
                    </tr>
                </form>
            </table>
            <div class="shup">
                <p id="alerta"></p>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('formulario').addEventListener('submit', e=>{
            e.preventDefault()
            jQuery.ajax({
            url: "acount.php",
            data: $("#formulario").serialize(),
            type: "POST",
            success:function(data){
                $('#alerta').html(data)
            },
            error:function(){}
            })
        });
    </script>
</body>
</html>