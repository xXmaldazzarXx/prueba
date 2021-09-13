<?php
        $conn = mysqli_connect("localhost","root","","suremanagement");
        if ($conn -> connect_error){
            echo "Error en la conexion";
        }else{
            $ed= mysqli_query($conn,"UPDATE propietarios
            SET nombres='$_POST[nombres]',
            apellidos='$_POST[apellidos]',
            telefono='$_POST[telefono]',
            correo='$_POST[correo]'
            WHERE doc_prop = $_POST[ppp]");
            echo 'Se ha editado correctamente';
        }
?>