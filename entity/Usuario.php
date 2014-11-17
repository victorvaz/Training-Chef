<?php

class Usuario
{
    private $_id;
    private $_email;
    private $_senha;
    
    public function setID($id)
    {
        $this->_id = $id;
    }
    
    public function getID()
    {
        return $this->_id;
    }
    
    public function setEmail($email)
    {
        $this->_email = $email;
    }
    
    public function getEmail()
    {
        return $this->_email;
    }
    
    public function setSenha($senha)
    {
        $this->_senha = $senha;
    }
    
    public function getSenha()
    {
        return $this->_senha;
    }
}

?>