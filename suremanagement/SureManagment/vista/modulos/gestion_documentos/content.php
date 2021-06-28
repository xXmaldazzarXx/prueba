<?php
 $conn = mysqli_connect("localhost","root","","suremanagement");
 $guardado = $_FILES['archivo']['tmp_name'];
 $cons1 = mysqli_query($conn,"INSERT INTO documentos(nombre,fecha,id_propietario) VALUES $_FILES[archivo]['name'],");
 if(){}
 move_uploaded_file($guardado,'documentos/')
?>