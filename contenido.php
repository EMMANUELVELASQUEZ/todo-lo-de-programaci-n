<?php 
session_start();

if (isset($_SESSION['usuario'])) 
{
	include 'views/contenido.view.php';
}
else
{
	header('Location: login.php');
}


 ?>