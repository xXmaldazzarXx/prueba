<?php
            $conn = mysqli_connect("localhost","root","","suremanagement");
            if ($conn -> connect_error){
                echo "Error en la conexion";
            }else{
                $del = mysqli_query($conn,"DELETE FROM propietarios WHERE id_propietario = $_POST[deluss] ");
            }
    
?>