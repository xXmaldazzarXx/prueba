<?php
        $conn = mysqli_connect("localhost","root","","suremanagement");
        if ($conn -> connect_error){
            echo "Error en la conexion";
        }else{
            $ed= mysqli_query($conn,"UPDATE usuarios 
            SET nombres='$_POST[nombres]',
            apellidos='$_POST[apellidos]',
            usuario='$_POST[user]',
            contraseña='$_POST[pass]',
            email='$_POST[correo]'
            WHERE id_usuario = $_POST[ppp]");
            echo 'Se ha editado correctamente';
        }
?>