<?php

class Cozinheiro
{
	private $_id;
	private $_nome;
	private $_dataNasc;
	private $_telefoneParticular;
	private $_telefoneOpcional;
	private $_email;
	private $_senha;
	private $_cpf;
	private $_endereco;
	private $_numero;
	private $_estado;
	private $_bairro;
	private $_cidade;
	private $_cep;
	private $_foto;

	public function setId($id) { $this->_id = $id; }
	public function getId() { return $this->_id; }

	public function setNome($nome) { $this->_nome = $nome; }
	public function getNome() { return $this->_nome; }

	public function setDataNasc($data) { $this->_dataNasc = $data; }
	public function getDataNasc() { return $this->_dataNasc; }

	public function setTelefoneParticular($telefone) { $this->_telefoneParticular = $telefone; }
	public function getTelefoneParticular() { return $this->_telefoneParticular; }

	public function setTelefoneOpcional($telefone) { $this->_telefoneOpcional = $telefone; }
	public function getTelefoneOpcional() { return $this->_telefoneOpcional; }

	public function setEmail($email) { $this->_email = $email; }
	public function getEmail() { return $this->_email; }

	public function setSenha($senha) { $this->_senha = $senha; }
	public function getSenha() { return $this->_senha; }

	public function setCPF($cpf) { $this->_cpf = $cpf; }
	public function getCPF() { return $this->_cpf; }

	public function setEndereco($endereco) { $this->_endereco = $endereco; }
	public function getEndereco(){ return $this->_endereco; }

	public function setNumero($numero) { $this->_numero = $numero; }
	public function getNumero() { return $this->_numero; }

	public function setEstado($estado) { $this->_estado = $estado; }
	public function getEstado() { return $this->_estado; }

	public function setBairro($bairro) { $this->_bairro = $bairro; }
	public function getBairro() { return $this->_bairro; }

	public function setCidade($cidade) { $this->_cidade = $cidade; }
	public function getCidade() { return $this->_cidade; }

	public function setCEP($cep) { $this->_cep = $cep; }
	public function getCEP() { return $this->_cep; }

	public function setFoto($foto) { $this->_foto = $foto; }
	public function getFoto(){ return $this->_foto; }
}

?>