<?php

if (file_exists('../core/DAL.php')) { require_once '../core/DAL.php'; }
else { require_once 'core/DAL.php'; }

if (file_exists('../entity/Restaurante.php')) { require_once '../entity/Restaurante.php'; }
else { require_once 'entity/Restaurante.php'; }

if (file_exists('model/Model.php')) { require_once 'model/Model.php'; }
else { require_once 'Model.php'; }

/**
 * Classe modelo para a entidade Restaurante
 * @author Victor Vaz de Oliveira <victor-vaz@hotmail.com>
 */
class RestauranteModel implements Model
{
    /**
     * Função para cadastrar um Restaurante.
     * @param Restaurante $Restaurante
     */
    public function cadastrar(Entidade $Restaurante)
    {
        $DAL = new DAL();
        $DAL->conectar();
        
        $sql = "INSERT INTO restaurante (nome,
                                        email,
                                        senha)
                                VALUES ('" . $Restaurante->getNome() . "',
                                        '" . $Restaurante->getEmail() . "',
                                        '" . $Restaurante->getSenha() . "')";
        mysql_query($sql)
            or die ("Aconteceu um erro: Não foi possível cadastrar o restaurante.");
    }
    
    public function atualizar(Entidade $Restaurante)
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