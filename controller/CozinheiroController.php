<?php
if (file_exists('../model/CozinheiroModel.php')) { require_once '../model/CozinheiroModel.php'; }
else { require_once '/model/CozinheiroModel.php'; }

if (file_exists('../entity/Cozinheiro.php')) { require_once '../entity/Cozinheiro.php'; }
else { require_once '/entity/Cozinheiro.php'; }

class CozinheiroController
{
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

    private function validarCamposObrigatorios(Cozinheiro $cCozinheiro)
    {
        if ($cCozinheiro->getNome() == "")
        {
            ?>Aconteceu um erro: Não foi informado o nome do cozinheiro.<?php
            exit;
        }
        else if ($cCozinheiro->getDataNasc() == "")
        {
            ?>Aconteceu um erro: Não foi informado a data de nascimento do cozinheiro.<?php
            exit;
        }
        else if ($cCozinheiro->getTelefoneParticular() == "")
        {
            ?>Aconteceu um erro: Não foi informado o telefone particular do cozinheiro.<?php
            exit;
        }
        else if ($cCozinheiro->getEmail() == "")
        {
            ?>Aconteceu um erro: Não foi informado o e-mail do cozinheiro.<?php
            exit;
        }
        else if ($cCozinheiro->getSenha() == "")
        {
            ?>Aconteceu um erro: Não foi informado a senha do cozinheiro.<?php
            exit;
        }
        else if ($cCozinheiro->getCPF() == "")
        {
            ?>Aconteceu um erro: Não foi informado o CPF do cozinheiro.<?php
            exit;
        }
        else
        {
            return true;
        }
    }
}

?>