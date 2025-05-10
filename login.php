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
 
 	$password= hash('sha512',$password);
/*echo $usuario.'<br>';
echo $password.'<br>';*/
	$errores='';

	if (empty($usuario) or empty($password)) 
	{
		$errores.='<li>Por favor de rellenar todos los campos </li>';
	}else
	{
		$consulta= $conexion->prepare('
		SELECT * FROM usuarios WHERE correo= :email and password=:pass');
		$consulta->execute(array(':email'=>$usuario,':pass'=>$password));
		$resultado= $consulta->fetch();
		if ($resultado == false) 
		{
		    $errores.='Datos incorrectos';
		}
		if ($resultado !== false) 
		{
			$_SESSION['usuario']=$usuario;
		    header('Location: contenido.php');
		}	
	}
}//if

include 'views/login.view.php';
 ?>