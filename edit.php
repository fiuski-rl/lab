<?php
	session_start();
	    if (isset($_SESSION['LOGADO']) == false){
	        header('location: index.html');
	    }

	require_once("conexao.php");
	require_once("classes/Paciente.class.php");
	require_once("classes/PacienteDB.class.php");

	$idPaciente = $_REQUEST["id"];
	$paciente = PacienteDB::findById($idPaciente, $conexao);

?>
<html>
	<head>

	</head>
	<body>
		<a class="logout" href="logout.php">Sign Out</a>
		<div class="content_home">
		<form name="frm" method="post" action="update.php">
			<?php echo "<input class='' type='hidden' name='id' value='" . $paciente->getIdPaciente() . " '/>"; ?>
			<table class="newpac">
					
				
					<tr><td>Nome:
						<?php echo "<input class='' type='text' name='nome' placeholder='Nome:' value='" . $paciente->getNome() . " '/>"; ?>
					</td></tr>
					<tr><td>RG:
						<?php echo "<input class='' type='text' name='rg' placeholder='RG:' value='" . $paciente->getRG() . "'/>"; ?>
					</td></tr>
					<tr><td>CPF:
						<?php echo "<input class='' type='text' name='cpf' placeholder='CPF:' value='" . $paciente->getCPF() . "'/>"; ?>
					</td></tr>
					<tr><td>Email:
						<?php echo "<input class='' type='text' name='email' placeholder='Email:' value='" . $paciente->getEmail() . "'/>"; ?>
					</td></tr>
					<tr><td>Telefone:
						<?php echo "<input class='' type='text' name='fone' placeholder= 'Telefone:' value='".$paciente->getFone() . "'/>"; ?>
					</td></tr>
					<tr><td>Endereço:
						<?php echo "<input class='' type='text' name='endereco' placeholder='Endereço:' value='".$paciente->getEndereco()."'/>"; ?>
					</td></tr>
					<tr><td>Cep:
						<?php echo "<input class='' type='text' name='cep' placeholder='Cep:' value='" . $paciente->getCep() . "'/>"; ?>
					</td></tr>
					<tr><td>Cidade:
						<?php echo "<input class='' type='text' name='cidade' placeholder='Cidade:' value='".$paciente->getCidade()."'/>"; ?>
					</td></tr>
					<tr><td>Convenio:
						<?php echo "<input class='' type='text' name='convenio' placeholder='Convenio:' value='".$paciente->getConvenio()."'/>"; ?>
					</td></tr>
				</tr>
			</table>
			<input type="submit" value="Salvar"></input>
		</form>
		</div>
	</body>
</html>