<?php  

$host = "localhost";
$usuario= "root";
$clave = "";
$base = "suremanagement";

function conectarBase($host,$usuario,$clave,$base){
    if(!$enlace = @mysqli_connect($host,$usuario,$clave,$base)){
        return false;
    }
    else{
        return $enlace;
    }
}

?>