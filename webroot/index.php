<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login UtnCoop</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div class="contenedor-form" id='toggle'>
		<div class="toggle">
		    <span>Crear Cuenta</span>	
		</div>
		<div class="formulario session" id='test'>
			<h2>Iniciar Sesión</h2>
			<form action="#">
				<input type="text" placeholder="Usuario" required>
				<input type="password" placeholder="Contraseña" required>
				<input type="submit" value="Iniciar Sesión">
			</form>
		</div>

		<div class="formulario create" id='test2'>
			<h2>Crea tu Cuenta</h2>
			<form action="#">
				<input type="text" placeholder="Usuario" required>
				<input type="password" placeholder="Contraseña" required>
				<input type="email" placeholder="Correo Electrónico" required>
				<input type="text" placeholder="Celular" required>
				<input type="submit" value="Registrarse">
			</form>
		</div>

		<div class="reset-password">
			<a href="#">Olvide mi contraseña?</a>
		</div>
    </div>
     
     <script src="js/jquery-3.3.1.min.js"></script>
     <script src="js/main.js"></script>

</body>
</html>