<?php
 $conn = mysqli_connect("localhost","root","","suremanagement");
 $fecha = $_POST['fecha'];
 $npro = $_POST['propietario'];
 $guardado = $_FILES["docc"]['tmp_name'];
 $nombre = $_FILES["docc"]['name'];
    if(file_exists('documentos/'.$npro.'/'.$nombre)){
        echo'Error!, Archivo existente';
    }else{
        move_uploaded_file($guardado,'documentos/'.$npro.'/'.$nombre);
        $cons1 = mysqli_query($conn,"INSERT INTO documentos(nombre,fecha,doc_prop) VALUES ('$nombre','$fecha','$npro');");
        echo 'Archivo insertado con exito';
    }
?>