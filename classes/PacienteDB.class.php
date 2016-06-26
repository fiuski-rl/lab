<?php
require_once("classes/Paciente.class.php");
class PacienteDB {

	static function inserir($nome, $RG, $CPF, $email, $fone, $endereco, $cep, $cidade, $convenio, $conexao) {
		$sql = "insert into paciente (nome, rg, cpf, email, fone, endereco, cep, cidade, convenio)
		values('" . $nome . "','" . $RG . "','" . $CPF . "','" . $email . "','" . $fone . "','" . $endereco . "','" . $cep . "','" . $cidade . "','" . $convenio ."')";
		$tabela = pg_query ($conexao, utf8_encode($sql));

		if($tabela){
			header("location:paciente.php");
		}
	}

	static function listar($conexao) {
		$sql = "select * from Paciente"; 
		$tabela = pg_query($conexao, $sql);
		$pacienteList = [];
		$i = 0;

		while ($dados = pg_fetch_array($tabela)) {
			$auxPaciente = new Paciente ($dados["idpaciente"], $dados ["nome"], $dados ["rg"], $dados ["cpf"], $dados ["email"], $dados ["fone"], $dados ["endereco"], $dados ["cep"], $dados ["cidade"], $dados ["convenio"]);
			$pacienteList [$i] = $auxPaciente;
			$i++; 
		}
		return $pacienteList; 
	}

	static function findById( $idPaciente, $conexao){
		$sql = "select * from paciente where idPaciente=" . $idPaciente;
		$tabela = pg_query($conexao, $sql);
		$pacienteEager = pg_fetch_array($tabela);

		if ($pacienteEager){
			$pacienteReturn = new Paciente ($pacienteEager["idpaciente"], $pacienteEager ["nome"], $pacienteEager ["rg"], $pacienteEager ["cpf"], $pacienteEager ["email"], $pacienteEager ["fone"], $pacienteEager ["endereco"], $pacienteEager ["cep"], $pacienteEager ["cidade"], $pacienteEager ["convenio"]);
			return $pacienteReturn;
		}
	}

	static function update( $idPaciente, $nome, $RG, $CPF, $email, $fone, $endereco, $cep, $cidade, $convenio, $conexao) {
		$sql = "update paciente set nome='" . $nome . "', rg='" . $RG . "', cpf= '" . $CPF . "', email='" . $email . "', fone='" . $fone . "', endereco='" . $endereco . "', cep='" . $cep . "', cidade='" . $cidade . "', convenio='" . $convenio . "' where idPaciente=" . $idPaciente;
		$tabela = pg_query($conexao, $sql);
	} 

	static function delete($idPaciente, $conexao) {
		$sql = "delete from Paciente where idPaciente = " . $idPaciente;
		$resultado = pg_query($conexao, $sql);
		return $resultado;
	}

}
?>