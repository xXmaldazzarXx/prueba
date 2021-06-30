<html>
    <body>
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "suremanagement") or die ("Problemas en la conexión"); 
            mysqli_query($conexion, "")
            mysqli_close($conexion);
            echo "El estudiante ha sido registrado exitosamente.";
        ?>    
    </body>
</html>