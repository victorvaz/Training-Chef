<?php
if (file_exists('../DAL.php')) { require_once '../DAL.php'; }
else { require_once 'DAL.php'; }

if (file_exists('../entity/Experiencia.php')) { require_once '../entity/Experiencia.php'; }
else { require_once 'entity/Experiencia.php'; }

if (file_exists('../controller/UsuarioController.php')) { require_once '../controller/UsuarioController.php'; }
else { require_once 'controller/UsuarioController.php'; }

class ExperienciaModel 
{
    /**
     * Função para cadastrar uma experiência para um cozinheiro.
     * @author Víctor Vaz de Oliveira <victor-vaz@hotmail.com>
     * @data 17/11/2014
     * @param Experiencia $cExperiencia
     */
    public function cadastrarExperiencia(Experiencia $cExperiencia)
    {
        $cDAL = new DAL();
        $cDAL->conectar();
        
        $sqlCadastrarExperiencia = "INSERT INTO experiencia (id_cozinheiro,
                                                             funcao,
                                                             descricao,
                                                             data_fim,
                                                             data_inicio)
                                                     VALUES (" . $cExperiencia->getIDCozinheiro() . ",
                                                             '" . $cExperiencia->getFuncao() . "',
                                                             '" . $cExperiencia->getDescricao() . "',
                                                             '" . $cExperiencia->getDataInicio() . "',
                                                             '" . $cExperiencia->getDataFim() . "');";
        
        $queryCadastrarExperiencia = mysql_query($sqlCadastrarExperiencia)
                or die ("Aconteceu um erro: Não foi possível cadastrar a experiência.");
    }
}

?>