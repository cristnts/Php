<?php

$agregar = $mysqli->query("select usuario,clave from usuarios where="'".$_POST['usuario']."','".$_POST['clave']."'"");	
			


if($_POST['login']=='juanito' && $_POST['clave']=='123')
{
	session_start();
	$_SESSION['login']='Usuario';
	$_SESSION['nombre']='Juanito Perez';
	header('location:principal.php');
}
else
{
	header('location:index.php?mensaje=Error de usuario');
}

?>