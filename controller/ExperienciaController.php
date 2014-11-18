<?php
if (file_exists('../model/ExperienciaModel.php')) { require_once '../model/ExperienciaModel.php'; }
else { require_once 'model/ExperienciaModel.php'; }

class ExperienciaController
{
    /**
     * Função para cadastrar uma experiência.
     * @author Víctor Vaz de Oliveira <victor-vaz@hotmail.com>
     * @data 17/11/2014
     * @param Experiencia $cExperiencia
     */
    public function cadastrarExperiencia(Experiencia $cExperiencia)
    {
        if ($this->validarExperiencia($cExperiencia))
        {
            $cExperienciaModel = new ExperienciaModel();
            $cExperienciaModel->cadastrarExperiencia($cExperiencia);
            ?><script>alert("Experiência cadastrado com sucesso!");</script><?php
        }
        else
        {
            ?><script>alert("Não foi possível cadastrar a experiência!");</script><?php
        }
    }
    
    /**
     * Função para validar a experiência que será cadastrada.
     * @author Víctor Vaz de Oliveira <victor-vaz@hotmail.com>
     * @data 17/11/2014
     * @param Experiencia $cExperiencia
     * @return boolean
     */
    private function validarExperiencia(Experiencia $cExperiencia)
    {
        $resultado = false;
        if ($cExperiencia->getIDCozinheiro() == "")
        {
            ?>Aconteceu um erro: Não foi informado o ID do cozinheiro.<?php
        }
        else if ($cExperiencia->getFuncao() == "")
        {
            ?>Aconteceu um erro: Não foi informado a função na experiência.<?php
        }
        else if ($cExperiencia->getDescricao() == "")
        {
            ?>Aconteceu um erro: Não foi informado a descrição na experiência.<?php
        }
        else if ($cExperiencia->getDataInicio() == "")
        {
            ?>Aconteceu um erro: Não foi informado a data de inicio.<?php
        }
        else if ($cExperiencia->getDataFim() == "")
        {
            ?>Aconteceu um erro: Não foi informado a data de fim.<?php
        }
        else
        {
            $resultado = true;
        }
        
        return $resultado;
    }
}

?>