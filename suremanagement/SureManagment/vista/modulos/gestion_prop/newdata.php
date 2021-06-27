<?php
    $con = mysqli_connect("localhost","root","","suremanagement");
    $new1 = mysqli_query($con,"INSERT INTO propietarios(nombres,apellidos,telefono,correo) VALUES ('$_POST[nombres]','$_POST[apellidos]','$_POST[telefono]','$_POST[correo]');");
    echo 'Se ha ingresado correctamente el propietario';
?>