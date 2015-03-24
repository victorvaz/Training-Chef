<?php

if (file_exists('../core/DAL.php')) { require_once '../core/DAL.php'; }
else { require_once 'core/DAL.php'; }

if (file_exists('../entity/Cozinheiro.php')) { require_once '../entity/Cozinheiro.php'; }
else { require_once 'entity/Cozinheiro.php'; }

if (file_exists('Model.php')) { require_once 'Model.php'; }
else { require_once 'model/Model.php'; }

/**
 * Classe modelo para a entidade Cozinheiro
 * @author Victor Vaz de Oliveira <victor-vaz@hotmail.com>
 */
class CozinheiroModel implements Model
{
    /**
     * Função para cadastrar um cozinheiro.
     * @param Cozinheiro $Cozinheiro
     */
    public function cadastrar(Cozinheiro $Cozinheiro)
    {
        $DAL = new DAL();
        
        $sql = "INSERT INTO cozinheiro (nome,
                                        email,
                                        senha)
                                VALUES ('" . $Cozinheiro->getNome() . "',
                                        '" . $Cozinheiro->getEmail() . "',
                                        '" . $Cozinheiro->getSenha() . "')";
        mysql_query($sql)
            or die ("Aconteceu um erro: Não foi possível cadastrar o cozinheiro.");
    }
    
    public function atualizar(Cozinheiro $Cozinheiro)
    {
        
    }

    public function buscar($id)
    {
        
    }

    public function buscarTodos()
    {
        
    }

    public function deletar($id)
    {
        
    }

}

?>