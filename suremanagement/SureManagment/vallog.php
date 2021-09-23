<?php
    $conn = mysqli_connect("localhost","root","","suremanagement");
    if ($conn -> connect_error){
        echo "Error en la conexion";
    }else{
        $recc = $_POST['userlog'];
        $cons = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario='$_POST[userlog]' AND contraseña='$_POST[passlog]'");
        if($reg = mysqli_fetch_array($cons)){
            echo " Has iniciado sesion ";
            SESSION_START();
                $_SESSION['newnum'] = $_POST['userlog'];
                $_SESSION['usersec'] = $reg['usuario'];
                $sec = $_SESSION['usersec'];
                $_SESSION['rol'] = $reg['rol'];
                $adm = $_SESSION['rol'];

            if($adm == 'admin' ){
?>
            <script>
                document.write('<body id="bodo"></body>')
                window.history.pushState( '', "dashboard", "dashboardad.php");
                $(document).ready(function(){
                    $("#bodo").load("dashboardad.php")
                })
            </script>
<?php
            }else{     
?>

                        <script>
                document.write('<body id="bodo"></body>')
                window.history.pushState( '', "dashboard", "dashboard.php");
                $(document).ready(function(){
                    $("#bodo").load("dashboard.php")
                })
            </script>
<?php
        echo $sec;
        }}else{
            echo "Usuario y contraseña no coinciden";
        }
    }
?>
<style>
*{
    width:100%;
}
</style>
