<?php
require_once("conexao.php");
	require_once("classes/Usuario.class.php");
	require_once("classes/UsuarioDB.class.php");

	$name = $_POST['name'];
	$user = $_POST['user'];
	$key = $_POST['key'];
	echo "asdasd" . $name;
	echo "asdasd" . $user;
	echo "asdasd" . $key;

	$name = htmlspecialchars($name);
	$user = htmlspecialchars($user);
	$key = htmlspecialchars($key);

	$objUser = new Usuario($name, $user, $key);

	if (!UsuarioDB::inserir($conexao,$objUser))
		echo "Usuario nao foi inserido.";
	else
		header("location:index.html");

	$uLength = strlen($name);
	$uLength = strlen($user);
	$pLength = strlen($key);

	if ($uLength >= 3 && $uLength <= 20) {
		$errorMessage = "";
	}else {
		$errorMessage = $errorMessage . "Username must be between 3 and 20 characters" . "<BR>";
	}

	if ($pLength >= 3 && $pLength <= 16) {
		$errorMessage = "";
	}else {
		$errorMessage = $errorMessage . "Password must be between 3 and 16 characters" . "<BR>";
	}

	if ($errorMessage == "") {

	}
?>