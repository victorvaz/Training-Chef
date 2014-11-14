<?php
if (file_exists('UsuarioController.php')) { require_once 'UsuarioController.php'; }
else { require_once 'controller/UsuarioController.php'; }

if (file_exists('../model/RestauranteModel.php')) { require_once '../model/RestauranteModel.php'; }
else { require_once 'model/RestauranteModel.php'; }

if (file_exists('../entity/Restaurante.php')) { require_once '../entity/Restaurante.php'; }
else { require_once 'entity/Restaurante.php'; }

class RestauranteController
{
    /**
     * Função para cadastrar um restaurante.
     * @author Víctor Vaz de Oliveira <victor-vaz@hotmail.com>
     * @data 14/11/2014
     * @param Restaurante $cRestaurante
     */
    public function cadastrar(Restaurante $cRestaurante)
    {
        if ($this->validarCamposObrigatorios($cRestaurante))
        {
            $cRestauranteModel = new RestauranteModel();
            $cRestauranteModel->cadastrarRestaurante($cRestaurante);
            ?><script>alert("Restaurante cadastrado com sucesso!");</script><?php
        }
        else
        {
            ?><script>alert("Não foi possível cadastrar o restaurante.");</script><?php
        }
    }
    
    /**
     * Função para validar os campos obrigatórios para o cadastro.
     * @author Víctor Vaz de Oliveira <victor-vaz@hotmail.com>
     * @data 14/11/2014
     * @param Restaurante $cRestaurante
     * @return boolean
     */
    private function validarCamposObrigatorios(Restaurante $cRestaurante)
    {
        $resultado = false;
        
        if ($cRestaurante->getNome() == "")
        {
            ?>Aconteceu um erro: Não foi informado o nome do restaurante.<?php
        }
        else if ($cRestaurante->getCNPJ() == "")
        {
            ?>Aconteceu um erro: Não foi informado o CNPJ do restaurante.<?php
        }
        else if ($cRestaurante->getRazaoSocial() == "")
        {
            ?>Aconteceu um erro: Não foi informado a razão social do restaurante.<?php
        }
        else if ($cRestaurante->getEmail() == "")
        {
            ?>Aconteceu um erro: Não foi informado o e-mail do restaurante.<?php
        }
        else if ($cRestaurante->getSenha() == "")
        {
            ?>Aconteceu um erro: Não foi informado a senha do restaurante.<?php
        }
        else
        {
            $resultado = true;
        }
        
        return $resultado;
    }
}