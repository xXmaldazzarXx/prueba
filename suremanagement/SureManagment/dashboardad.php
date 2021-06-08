<!DOCTYPE html>
<html lang='es' dir='ltr'>
  <head>
    <?php
  SESSION_START();
  $sec = $_SESSION['usersec'];
  echo $sec;
  if(!isset($_SESSION['usersec'])){
    header("Status: 301 Moved Permanently");
    header("Location: index.html");
  }else{
    if($sec <> 'admin' ){
        header("Status: 301 Moved Permanently");
        header("Location: index.html");
    }}
        ?>
  <script src="jquery-3.5.1.min.js"></script>
  <script type="text/javascript">

(function(document) {
  'use strict';

  var LightTableFilter = (function(Arr) {

    var _input;

    function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, _filter);
        });
      });
    }

    function _filter(row) {
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('light-table-filter');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = _onInputEvent;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      LightTableFilter.init();
    }
  });

})(document);
</script>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>SureManagement</title>
    <link rel='stylesheet' href='css/styledash.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
    
    <!-- Favicons -->
  <link href='img/about/LogoSM.png' rel='icon'>
  <link href='img/about/LogoSM.png' rel='apple-touch-icon'>
   
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' charset='utf-8'></script>
  </head>
  <body>

    <input type='checkbox' id='check'>
    <!--header area start-->
    <header>
      <label for='check'>
        <i class='fas fa-bars' id='sidebar_btn'></i>
      </label>
      <div class='left_area'>
        <h3>SureManagement</h3>
      </div>
      <div class='right_area'>
        <a href = 'index.html' class='logout_btn'>Salir</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class='mobile_nav'>
      <div class='nav_bar'>
        <img src='img/user3.png' alt=''>
        <i class='fa fa-bars nav_btn'></i>
      </div>
      <div class='mobile_nav_items'>
        <a href='#'><i class='fas fa-desktop'></i><span>Administrar usuarios</span></a>
        <a href='#'><i class='fas fa-cogs'></i><span>Gestionar empleados</span></a>
        <a href='#'><i class='fas fa-table'></i><span>Clientes</span></a>
        <a href='#'><i class='fas fa-th'></i><span>Administrar productos</span></a>
        <a href='#'><i class='fas fa-info-circle'></i><span>Ventas</span></a>
        <a href='#'><i class='fas fa-sliders-h'></i><span> Informe de ventas</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class='sidebar' style="background:white;">
      <div class='profile_info' style=" width: 250px;height: 250px;">
        <i class="fas fa-user fa-6x"></i>
        <h4>Usuario</h4>
      </div>
      <a href='vista/modulos/gestion_usuarios/facturacion.php' target='principal'><i class='fas fa-users'></i><span>Gestión Clientes</span></a>
      <a href='vista/modulos/gestion_usuarios/facturacion.php' target='principal'><i class='fas fa-sign'></i><span>Gestión Inmuebles</span></a>
      <a href='vista/modulos/gestion_documentos/inicio.php' target='principal'><i class='fas fa-folder-open'></i><span>Gestión archivos</span></a>
      <a href='vista/modulos/gestion_usuarios/facturacion.php' target='principal'><i class="fas fa-user-cog"></i><span>Gestión usuarios</span></a>
      <a href='vista/modulos/gestion_usuarios/facturacion.php' target='principal'><i class='fas fa-address-card'></i><span>Cuenta</span></a>
    </div>
    <!--sidebar end-->
    <div id='contenido' class='content' style="margin-top:50px;">
	  <iframe width='100%' height='100%' name='principal' id="principal" scrolling='Yes' src=''></iframe>
    </div>
    <script type='text/javascript'>
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>
  </body>
  <?php
                                    $conn = mysqli_connect("localhost","root","","suremanagement");
                                    if ($conn -> connect_error){
                                        echo "Error en la conexion";
                                    }else{
                                        $consulta = mysqli_query($conn, "SELECT * FROM usuarios");
                                        while($reg = mysqli_fetch_array($consulta)){
                                          echo '<script>function cedus'.$reg['id_usuario'].'(){
                                            document.getElementById("principal").src = "login.php"
                                          }</script>';
                                        }
  
                                      }
?>
</html>