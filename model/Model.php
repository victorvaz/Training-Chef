<?php

/**
 * Interface para padronização das classes modelo
 * @author Victor Vaz de Oliveira <victor-vaz@hotmail.com>
 */
interface Model
{
    /**
     * Método para cadastrar uma entidade
     * @param class $E Entidade
     */
    public function cadastrar($E);
    
    /**
     * Método para atualizar uma entidade
     * @param class $E Entidade
     */
    public function atualizar($E);
    
    /**
     * Método para buscar uma entidade
     * @param int $id ID identificador unico.
     */
    public function buscar($id);
    
    /**
     * Método para buscar todas as entidades.
     */
    public function buscarTodos();
    
    /**
     * Método para deletar uma determinada entidade
     * @param int $id ID identificador unico.
     */
    public function deletar($id);
}

?>