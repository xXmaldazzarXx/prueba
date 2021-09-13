<?php 
$conn = mysqli_connect("localhost","root","","suremanagement");
$nombre = $_POST['nprop'];
if ($nombre === "fff"){
    echo "Selecione un propietario";
}else{
$cons = mysqli_query($conn,"SELECT nombres,apellidos FROM propietarios WHERE doc_prop = $nombre");

while($reg = mysqli_fetch_array($cons)){
    echo $reg['nombres'].' '.$reg['apellidos'];

}

}
 ?>