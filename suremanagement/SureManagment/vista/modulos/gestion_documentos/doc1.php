<?php 
$conn = mysqli_connect("localhost","root","","suremanagement");
$nombre = $_POST['nprop'];
$cons = mysqli_query($conn,"SELECT nombres,apellidos FROM propietarios WHERE id_propietario = $nombre");
if($nombre == "g"){
    echo 'Seleccione Un propietario';
}else{
while($reg = mysqli_fetch_array($cons)){
    echo $reg['nombres'].' '.$reg['apellidos'];
}
}
 ?>