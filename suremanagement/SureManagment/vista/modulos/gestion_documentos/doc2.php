<?php 
$conn = mysqli_connect("localhost","root","","suremanagement");
$nombre = $_POST['nprop'];
if ($nombre === "fff"){
    echo "<p style='color:white;text-align:center;'>Selecione un propietario</p>";
}else{
$cons = mysqli_query($conn,"SELECT * FROM documentos WHERE doc_prop = $nombre");
while($reg = mysqli_fetch_array($cons)){
    echo '<div id="contenido" class="contar">
    <div id="infoar.." class="infoar">
    '.$reg['nombre'].'
    </div>
    <div class="btndown">
    <h3><a href="documentos/'.$reg['doc_prop'].'/'.$reg['nombre'].'"  download="'.$reg['nombre'].'">Descargar</a></h3>
    </div>
    </div>
    <hr class="line1" align="center">';
}
}
?>
