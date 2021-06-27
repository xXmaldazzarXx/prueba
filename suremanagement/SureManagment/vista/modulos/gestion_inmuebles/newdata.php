<?php
    $con = mysqli_connect("localhost","root","","suremanagement");
    $new1 = mysqli_query($con,"INSERT INTO inmuebles_arriendo(direccion,complemento,valor,fecha_pago,id_propietario) VALUES ('$_POST[direccion]','$_POST[complemento]','$_POST[valor]','$_POST[fecha]','$_POST[propietario]');");
    echo 'Se ha ingresado correctamente el inmueble';
?>