<!DOCTYPE html>
<html lang="es" dir="ltr">
<!-- http://localhost/SureManagment/login.html-->
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title>Suremanagement</title>
		
		<!-- Favicons -->
        <link href="img/about/LogoSM.png" rel="icon">
        <link href="img/about/LogoSM.png" rel="apple-touch-icon">
		<link rel="stylesheet" href="css/stylelogin.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<body id="bodo">
		<!--Linea-->
		<hr class="line1">
		<!--form area start-->
		<div class="form">
			<!--login form start-->
			<form class="login-form" action="" method="post" id="formlog">
				<i class="fas fa-user-circle"></i>
				<input class="user-input" type="text" name="userlog" id="userlog" placeholder="Usuario" required>
				<input class="user-input" type="password" name="passlog" id="passlog" placeholder="Contraseña" required>
				<div class="options-01">
					<label class="remember-me"><input type="checkbox" name="">Recordar contraseña</label>
					<a href="#">¿Olvidaste la contraseña?</a>
				</div>
				<input class="btn" type="submit" value="INGRESAR">
				<div class="options-02">
					<p>¿No tienes cuenta? <a href="#">Crear cuenta</a></p>
					<div id="ad1" class="avssig"></div>
				</div>
			</form>
			<!--login form end-->
			<!--signup form start-->
			<form class="signup-form"  method="post" id="formsig">
				<i class="fas fa-user-plus"></i>
				<input class="user-input" type="text" name="nom" placeholder="Nombres" required>
				<input class="user-input" type="text" name="ape" placeholder="Apellidos" required>
				<input class="user-input" type="text" name="user" placeholder="Nombre de usuario" required>
				<input class="user-input" type="password" name="pass" placeholder="Contraseña" required>
				<input class="user-input" type="email" name="correo" placeholder="Correo electrónico" required>
				<input class="btn" type="submit" value="REGISTRARSE" onclick="ver()" id="guardar">
				<div class="options-02">
					<p>¿Ya estas registrado? <a href="#">Iniciar Sesión</a></p>
					<div id="ad" class="avssig"></div>
				</div>
			</form>
			<!--signup form end-->
		
		</div>
		<!-- Alertas-->
		
		<!--form area end-->

		<script type="text/javascript">
		$('.options-02 a').click(function(){
			$('form').animate({
				height: "toggle", opacity: "toggle"
			}, "slow");
		});
		</script>
		<!-- PHP CODE 
	    	link stilos aviso -->
	    	<div class="aviso" id="avs">
		    <?php
        ?>
    <script type="text/javascript"> 
		function ver() {
         document.getElementById("avs").style.display="block"
        }
		function ocultar() {
         document.getElementById("avs").style.display="none"
        }
		$(document).ready(function(){
				form1 = document.getElementById("formsig")
				form2 = document.getElementById("formlog")
				form1.addEventListener("submit", e =>{
				e.preventDefault()
				jQuery.ajax({
				url: "valsig.php",
				data: $('#formsig').serialize(),
				type: "POST",
				success:function(data){
				$("#ad").html(data);
				},
				error:function(){
					alert("Error AJAX");
				}
				})
				})
				form2.addEventListener("submit", e =>{
				e.preventDefault()
				jQuery.ajax({
				url: "vallog.php",
				data: $('#formlog').serialize(),
				type: "POST",
				success:function(data){
				$("#ad1").html(data);
				},
				error:function(){
					alert("Error AJAX");
				}
				})
				})
		})
		</script>
        	</div>
	</body>
</html>