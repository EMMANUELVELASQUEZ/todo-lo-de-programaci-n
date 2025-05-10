<?php 
session_start();
if (isset($_SESSION['usuario'])) 
{
	header('Location: index.php');
}


include 'conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD']=='POST') 
{
	$usuario= filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING) ;
	#$usuario=$_POST['usuario'];
	$password= filter_var(strtolower($_POST['password']),FILTER_SANITIZE_STRING);
	$password2= filter_var(strtolower($_POST['password2']),FILTER_SANITIZE_STRING);

	$errores='';

	if (empty($usuario) or empty($password) or empty($password2)) 
	{
		$errores.='<li>Por favor de rellenar todos los campos </li>';
	}

else
{
 $consulta_usuario = $conexion->prepare(
 	'SELECT correo from usuarios where correo = :CORREO LIMIT 1');
 $consulta_usuario->execute(array(':CORREO'=>$usuario));

 $resultado = $consulta_usuario->fetch();

	if ($resultado != false) 
	{
	$errores.= '<li>El usuario ya existe</li>';
	}

	$password = hash('sha512', $password);
	$password2 = hash('sha512', $password2);

	if ($password != $password2) 
	{
	$errores.= '<li>Las contraseñas no son iguales</li>';
	}

	if ($errores=='') 
	{
		$guardar = $conexion->prepare('INSERT INTO usuarios (correo,password) VALUES (:CORREO,:PASS)');
		$guardar->execute(array(':CORREO'=>$usuario,':PASS'=>$password));
		header('Location: login.php');
	}

  }//else
}//if

include 'views/registrate.view.php';

 ?>