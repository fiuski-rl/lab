<?php
	require_once("conexao.php");
	require_once("classes/PacienteDB.class.php");

	$idPaciente = $_REQUEST ["id"];
	$ret = PacienteDB::delete($idPaciente, $conexao);
	echo $ret;
?>