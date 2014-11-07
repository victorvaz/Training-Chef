<?php

class Restaurante
{
    private $_id;
    private $_nome;
    private $_descricao;
    private $_telefoneComercialPrimario;
    private $_telefoneComercialSecundario;
    private $_CNPJ;
    private $_razaoSocial;
    private $_endereco;
    private $_numero;
    private $_estado;
    private $_bairro;
    private $_cidade;
    private $_cep;
    private $_email;
    private $_senha;
    private $_foto;
    
    public function setId($id) { $this->_id = $id; }
    public function getId() { return $this->_id; }    
    
    public function setNome($nome) { $this->_nome = $nome; }
    public function getNome() { return $this->_nome; }    
    
    public function setDescricao($descricao) { $this->_descricao = $descricao; }
    public function getDescricao() { return $this->_descricao; }    
    
    public function setTelefoneComercialPrimario($telefone) { $this->_telefoneComercialPrimario = $telefone; }
    public function getTelefoneComercialPrimario() { return $this->_telefoneComercialPrimario; }    
    
    public function setTelefoneComercialSecundario($telefone) { $this->_telefoneComercialSecundario = $telefone; }
    public function getTelefoneComercialSecundario() { return $this->_telefoneComercialSecundario; }   
    
    public function setCNPJ($cnpj) { $this->_CNPJ = $cnpj; }
    public function getCNPJ() { return $this->_CNPJ; }
    
    public function setRazaoSocial($razaoSocial) { $this->_razaoSocial = $razaoSocial; }
    public function getRazaoSocial() { return $this->_razaoSocial; }
    
    public function setEndereco($endereco) { $this->_endereco = $endereco; }
    public function getEndereco() { return $this->_endereco; }
    
    public function setNumero($numero) { $this->_numero = $numero; }
    public function getNumero() { return $this->_numero; }
    
    public function setEstado($estado) { $this->_estado = $estado; }
    public function getEstado() { return $this->_estado; }
    
    public function setBairro($bairro) { $this->_bairro = $bairro; }
    public function getBairro(){ return $this->_bairro; }
    
    public function setCidade($cidade) { $this->_cidade = $cidade; }
    public function getCidade() { return $this->_cidade; }
    
    public function setCEP($cep) { $this->_cep = $cep; }
    public function getCEP() { return $this->_cep; }
    
    public function setEmail($email) { $this->_email = $email; }
    public function getEmail() { return $this->_email; }
    
    public function setSenha($senha) { $this->_senha = $senha; }
    public function getSenha() { return $this->_senha; }
    
    public function setFoto($foto) { $this->_foto = $foto; }
    public function getFoto() { return $this->_foto; }
}
?>