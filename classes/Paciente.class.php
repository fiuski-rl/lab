<?php
class Paciente {

	private $idPaciente;
	private $nome;
	private $RG;
	private $CPF;
	private $email;
	private $fone;
	private $endereco;
	private $cep;
	private $cidade;
	private $convenio;
	
	function __construct ($aux0, $aux1, $aux2, $aux3, $aux4, $aux5, $aux6, $aux7, $aux8, $aux9) {
		$this->idPaciente = $aux0;
		$this->nome = $aux1;
		$this->RG = $aux2;
		$this->CPF = $aux3;
		$this->email = $aux4;
		$this->fone = $aux5;
		$this->endereco = $aux6;
		$this->cep = $aux7;
		$this->cidade = $aux8;
		$this->convenio = $aux9;
	}

	function setIdPaciente($aux) {
		$this->idPaciente = $aux;
	}

	function getIdPaciente() {
		return $this->idPaciente;
	}

	function setNome($aux) {
		$this->nome = $aux;
	}
	function getNome() {
		return $this->nome;
	}
	function setRG($aux) {
		$this->RG = $aux;
	}
	function getRG() {
		return $this->RG;
	}
	function setCPF($aux) {
		$this->CPF = $aux;
	}
	function getCPF() {
		return $this->CPF;
	}
	function setEmail($aux) {
		$this->email = $aux;
	}
	function getEmail() {
		return $this->email;
	}
	function setFone($aux) {
		$this->fone = $aux;
	}
	function getFone() {
		return $this->fone;
	}
	function setEndereco($aux) {
		$this->endereco = $aux;
	}
	function getEndereco() {
		return $this->endereco;
	}
	function setCep($aux) {
		$this->cep = $aux;
	}
	function getCep() {
		return $this->cep;
	}
	function setCidade($aux) {
		$this->cidade = $aux;
	}
	function getCidade() {
		return $this->cidade;
	}
	function setConvenio($aux) {
		$this->convenio = $aux;
	}
	function getConvenio() {
		return $this->convenio;
	}
}
?>