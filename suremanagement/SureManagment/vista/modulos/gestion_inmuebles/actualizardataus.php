<?php
        $conn = mysqli_connect("localhost","root","","suremanagement");
        if ($conn -> connect_error){
            echo "Error en la conexion";
        }else{
            $ed= mysqli_query($conn,"UPDATE inmuebles_arriendo
            SET direccion='$_POST[direccion]',
            complemento='$_POST[complemento]',
            valor='$_POST[valor]',
            fecha_pago='$_POST[fecha]',
            doc_prop='$_POST[propietario]'
            WHERE id_inmueble = $_POST[ppp]");

            echo 'Se ha editado correctamente';
            echo 'direccion='.$_POST['direccion'].',
            complemento='.$_POST['complemento'].',
            valor='.$_POST['valor'].',
            fecha_pago='.$_POST['fecha'].',';
        }
        //Cascade datables
?>