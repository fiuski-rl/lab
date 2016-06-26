<?php
	require_once ("conexao.php");
	require_once ("classes/PacienteDB.class.php");

	$nome = $_REQUEST["nome"];
	$RG = $_REQUEST["rg"];
	$CPF = $_REQUEST["cpf"];
	$email = $_REQUEST["email"];
	$fone = $_REQUEST["fone"];
	$endereco = $_REQUEST["endereco"];
	$cep = $_REQUEST["cep"];
	$cidade = $_REQUEST["cidade"];
	$convenio = $_REQUEST["convenio"];

	PacienteDB::inserir($nome, $RG, $CPF, $email, $fone, $endereco, $cep, $cidade, $convenio, $conexao);
?>