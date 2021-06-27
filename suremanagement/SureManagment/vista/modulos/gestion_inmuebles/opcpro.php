<?php
$con = mysqli_connect("localhost","root","","suremanagement");
$cons = mysqli_query($con,"SELECT id_propietario,nombres,apellidos FROM propietarios");
echo'<option value="">Sin Propietario</option>';
while($reg = mysqli_fetch_array($cons)){
    echo'<option value="'.$reg['id_propietario'].'">'.$reg['nombres'].' '.$reg['apellidos'].'</option>';
}
?>