<?php
class Usuario {

	private $codigo;
	private $name;
	private $user;
	private $key;
	
	function __construct ($aux1, $aux2, $aux3) {
		$this->name = $aux1;
		$this->user = $aux2;
		$this->key = $aux3;
	}

	function setName($aux) {
		$this->name = $aux;
	}
	function getname() {
		return $this->name;
	}
	
	function setUser($aux) {
		$this->user = $aux;
	}
	function getUser() {
		return $this->user;
	}

	function setKey($aux) {
		$this->key = $aux;
	}
	function getKey() {
		return $this->key;
	}
	
}
?>