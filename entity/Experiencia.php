<?php

class Experiencia
{
    private $_id;
    private $_idCozinheiro;
    private $_funcao;
    private $_descricao;
    private $_dataInicio;
    private $_dataFim;
    
    public function setID($id) { $this->_id = $id; }
    public function getID() { return $this->_id; }
    
    public function setIDCozinheiro($id) { $this->_idCozinheiro = $id; }
    public function getIDCozinheiro() { return $this->_idCozinheiro; }
    
    public function setFuncao($funcao) { $this->_funcao = $funcao; }
    public function getFuncao() { return $this->_funcao; }
    
    public function setDescricao($descricao) { $this->_descricao = $descricao; }
    public function getDescricao() { return $this->_descricao; }
    
    public function setDataInicio($data) { $this->_dataInicio = $data; }
    public function getDataInicio() { return $this->_dataInicio; }
    
    public function setDataFim($data) { $this->_dataFim = $data; }
    public function getDataFim() { return $this->_dataFim; }
}

?>