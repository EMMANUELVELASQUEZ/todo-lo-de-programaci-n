<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=10, maximum-scale=1.0,minimum-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet"  href="Fork-Awesome/css/fork-awesome.min.css">
	<title>Registate</title>
</head>
<body>

	<div class="contenedor">
		<h1 class="titulo">Registrate</h1>

	<hr class="border">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])   ?>" method="POST" class="formulario" name="login">

		<div class="form-grup">
			<i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
		</div>
		<br>
<div class="form-grup">
			<i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password" placeholder="Contraseña">
			
		</div>
<br>
<div class="form-grup">
			<i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" class="password_btn" placeholder="Contraseña">
			<i class="submit_btn fa fa-arrow-right" onclick="login.submit()"></i>
		</div>

<?php    
	
	if (!empty($errores)):?>
		<div class="error">
			<?php echo $errores; ?>
		</div>	
	<?php endif; ?>	 

		
	</form>

<br>
        <p class="texto-registrate">
        	¿Ya tienes cuenta?
        	<a href="login.php">Iniciar Sesión</a>
        </p>


	</div>

</body>
</html>