<?php
    $con = mysqli_connect("localhost","root","","suremanagement");
    $repnom = mysqli_query($con, "SELECT usuario FROM usuarios where usuario='$_REQUEST[user]';");
    if( mysqli_num_rows($repnom)> 0){
        echo 'usuario existente, intente nuevamente';
    }else{
        $new1 = mysqli_query($con,"INSERT INTO usuarios(nombres,apellidos,usuario,contraseña,email) VALUES ('$_POST[nombres]','$_POST[apellidos]','$_POST[user]','$_POST[pass]','$_POST[correo]');");
        echo 'Se ha ingresado correctamente el usuario';
    }
?>