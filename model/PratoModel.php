<?php

if (file_exists('../core/DAL.php')) { require_once '../core/DAL.php'; }
else { require_once 'core/DAL.php'; }

if (file_exists('../entity/Cozinheiro.php')) { require_once '../entity/Cozinheiro.php'; }
else { require_once 'entity/Cozinheiro.php'; }

if (file_exists('../entity/Prato.php')) { require_once '../entity/Prato.php'; }
else { require_once 'entity/Prato.php'; }

if (file_exists('model/Model.php')) { require_once 'model/Model.php'; }
else { require_once 'Model.php'; }

/**
 * Classe modelo para a entidade Prato
 * @author Victor Vaz de Oliveira <victor-vaz@hotmail.com>
 */
class PratoModel implements Model
{
    /**
     * Função para cadastrar um prato no banco de dados
     * @param \Prato $Prato
     */
    public function cadastrar(\Entidade $Prato)
    {
        $DAL = new DAL();
        $DAL->conectar();
        
        $sql = "INSERT INTO prato (cozinheiro_idcozinheiro,
                                   nome,
                                   descricao,
                                   imagem,
                                   receita)
                           VALUES ( " + $Prato->getCozinheiro()->getID() + ",
                                   '" + $Prato->getNome() + "',
                                   '" + $Prato->getImagem() + "',
                                   '" + $Prato->getDescricao() + "',
                                   '" + $Prato->getReceita() + "')";
        $query = mysql_query($sql)
            or die ("Aconteceu um erro: Não foi possível cadastrar o prato.");
    }

    public function atualizar(\Entidade $Prato)
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