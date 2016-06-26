<?php
class UsuarioDB {

	static function inserir($auxConexao,$auxUsuario) {
		$sql = "insert into usuario (nome, email, senha) 
				values ('" .	$auxUsuario->getName() . "', '" . 
				$auxUsuario->getUser() . "', '" . 
				md5($auxUsuario->getKey()) . "')";

	echo $sql;
		$resultado = pg_query($auxConexao, $sql);
		return $resultado;
	}

	static function autenticar($auxUsuario, $conexao) {
		$sql = "select * from usuario where email = '" . $auxUsuario->getUser() . "' and senha = '" . md5($auxUsuario->getKey()) . "'";
		$resultado = pg_query($conexao, $sql);
		if (pg_num_rows($resultado) > 0)
			return true;
		else
			return false;
	}
	
	static function autenticar1($auxUsuario, $conexao) {
		$sql = "select * from usuario where email = '" . $auxUsuario->getUser() . "' and senha = '" . md5($auxUsuario->getKey()) . "'";

		$resultado = pg_query($conexao, $sql);
		if ($dados = pg_fetch_array($resultado))
			
			return true;
		else
			return false;
	}
}
?>