<?php
session_start();
    if (isset($_SESSION['LOGADO']) == false){
        header('location: index.html');
    }


require_once("conexao.php");
require_once("classes/Paciente.class.php");
require_once("classes/PacienteDB.class.php");

?>
<html>
	<head>
		<title> Lab </title>
        <link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8"/>
	  	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
	</head>
	<body>
		<a class="logout" href="logout.php">Sign Out</a>
		<div class="content_home">
			<form name="frm" method="post" action="inserir.php">
				<table class="newpac">
					<tr><td><h2>Cadastro de Pacientes</h2></td></tr>
					<tr><td><h1>Nome:</h1><input class="" type="text" name="nome" placeholder=""/></td></tr>
					<tr><td><h1>RG:</h1><input class="" type="text" name="rg" placeholder=""/></td></tr>
					<tr><td><h1>CPF:</h1><input class="" type="text" name="cpf" placeholder=""/></td></tr>
					<tr><td><h1>Email:</h1><input class="" type="text" name="email" placeholder=""/> </td></tr>
					<tr><td><h1>Telefone:</h1><input class="" type="text" name="fone" placeholder=""/></td></tr>
					<tr><td><h1>Endereço:</h1><input class="" type="text" name="endereco" placeholder=""/></td></tr>
					<tr><td><h1>Cep:</h1><input class="" type="text" name="cep" placeholder=""/></td></tr>
					<tr><td><h1>Cidade:</h1><input class="" type="text" name="cidade" placeholder=""/></td></tr>
					<tr><td><h1>Convenio:</h1><input class="" type="text" name="convenio" placeholder=""/></td></tr>
					<tr><td><input type="submit" value="Salvar"></input></td></tr>
				</table>
			</form>
		</div>
	</body>
</html>