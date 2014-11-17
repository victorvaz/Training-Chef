<?php
if (file_exists('../controller/UsuarioController.php')) { require_once '../controller/UsuarioController.php'; }
else if (file_exists('controller/UsuarioController.php')) { require_once 'controller/UsuarioController.php'; }
else { require_once 'UsuarioController.php'; }

if (file_exists('../model/CozinheiroModel.php')) { require_once '../model/CozinheiroModel.php'; }
else { require_once '/model/CozinheiroModel.php'; }

if (file_exists('../entity/Cozinheiro.php')) { require_once '../entity/Cozinheiro.php'; }
else { require_once '/entity/Cozinheiro.php'; }

class CozinheiroController extends UsuarioController
{
    /**
     * Função para cadastrar o cozinheiro.
     * @author Víctor Vaz de Oliveira <victor-vaz@hotmail.com>
     * @data 14/11/2014
     * @param Cozinheiro $cCozinheiro
     */
    public function cadastrar(Cozinheiro $cCozinheiro)
    {
        if ($this->validarCamposObrigatorios($cCozinheiro))
        {
            $cCozinheiroModel = new CozinheiroModel();
            $cCozinheiroModel->cadastrarCozinheiro($cCozinheiro);
            ?><script>alert("Cozinheiro cadastrado com sucesso!");</script><?php
        }
        else
        {
            ?><script>alert("Não foi possível cadastrar o cozinheiro.");</script><?php
        }
    }
    
    /**
     * Função para buscar um perfil de Cozinheiro por um id
     * @param int $id
     * @return Cozinheiro
     */
    public function buscarPerfilCozinheiro($id)
    {
        $cCozinheiroModel = new CozinheiroModel();
        return $cCozinheiroModel->buscarDadosCozinheiroPorId($id);
    }

    /**
     * Função para validar os campos obrigatórios para o cadastro do cozinheiro.
     * @author Víctor Vaz de Oliveira <victor-vaz@hotmail.com>
     * @data 14/11/2014
     * @param Cozinheiro $cCozinheiro
     * @return boolean
     */
    private function validarCamposObrigatorios(Cozinheiro $cCozinheiro)
    {
        $resultado = false;
        
        if ($cCozinheiro->getNome() == "")
        {
            ?>Aconteceu um erro: Não foi informado o nome do cozinheiro.<?php
        }
        else if ($cCozinheiro->getDataNasc() == "")
        {
            ?>Aconteceu um erro: Não foi informado a data de nascimento do cozinheiro.<?php
        }
        else if ($cCozinheiro->getTelefoneParticular() == "")
        {
            ?>Aconteceu um erro: Não foi informado o telefone particular do cozinheiro.<?php
        }
        else if ($cCozinheiro->getEmail() == "")
        {
            ?>Aconteceu um erro: Não foi informado o e-mail do cozinheiro.<?php
        }
        else if ($cCozinheiro->getSenha() == "")
        {
            ?>Aconteceu um erro: Não foi informado a senha do cozinheiro.<?php
        }
        else if ($cCozinheiro->getCPF() == "")
        {
            ?>Aconteceu um erro: Não foi informado o CPF do cozinheiro.<?php
        }
        else
        {
            $resultado = true;
        }
        
        return $resultado;
    }
}

?>