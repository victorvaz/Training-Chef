<?php

/**
 * Entidade cozinheiro
 * @author Victor Vaz de Oliveira <victor-vaz@hotmail.com>
 */
class Cozinheiro
{
    private $id;
    private $nome;
    private $email;
    private $senha;
    
    public function setID($id)
    {
        $this->id = $id;
    }
    
    public function getID()
    {
        return $this->id;
    }
    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    public function getNome()
    {
        return $this->nome;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    
    public function getSenha()
    {
        return $this->senha;
    }
}

?>