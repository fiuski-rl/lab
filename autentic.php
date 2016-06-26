<?php
	session_start();
	include "conexao.php";
	include "classes/Usuario.class.php";
	include "classes/UsuarioDB.class.php";

	$user = $_POST["user"];
	$key = $_POST["key"];

	$usuario = new Usuario('', $user, $key);

	$ok = UsuarioDB::autenticar1($usuario, $conexao);
	if ($ok){
			$_SESSION['USUARIO'] = $usuario;
	        $_SESSION['LOGADO'] = true;
	    	header("location:home.php");
	}else
		header("location:error.html");
?>