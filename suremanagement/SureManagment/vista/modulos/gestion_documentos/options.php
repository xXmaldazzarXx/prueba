<?php
    $conn = mysqli_connect("localhost","root","","suremanagement");
    $cons = mysqli_query($conn,"SELECT * FROM propietarios");
    while($reg = mysqli_fetch_array($cons)){
        echo '<option value="'.$reg['id_propietario'].'">'.$reg['nombres'].' '.$reg['apellidos'].'</option>';
        echo '<script>document.getElementById("propietario").value ='.$reg['id_propietario'].'</script>';
    }
?>