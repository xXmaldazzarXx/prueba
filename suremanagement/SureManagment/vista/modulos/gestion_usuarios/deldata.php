<?php
            $conn = mysqli_connect("localhost","root","","suremanagement");
            if ($conn -> connect_error){
                echo "Error en la conexion";
            }else{
                $del = mysqli_query($conn,"DELETE FROM usuarios WHERE id_usuario = $_POST[deluss] ");
            }
    
?>