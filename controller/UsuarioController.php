<?php

if (file_exists('model/CozinheiroModel.php')) { include_once 'model/CozinheiroModel.php'; }
else { include_once '../model/CozinheiroModel.php'; }

/**
 * Classe controladora para a entidade cozinheiro.
 * @author Victor Vaz de Oliveira <victor-vaz@hotmail.com>
 */
class UsuarioController
{
    /**
     * Variável constante para o indíce da $_SESSION.
     */
    const SESSION_USUARIO = "USUARIO";

    /**
     * Função para autenticar o usuário. Como essa função será utilizada ao tentar
     * logar com o usuário, ela já redireciona para a página index do administrativo.
     * @param Usuario $Usuario
     * @return boolean
     */
    public function autenticar(Usuario $Usuario)
    {
        $UsuarioModel = new UsuarioModel();
        $Usuario = $UsuarioModel->buscarPorEmailESenha($Usuario);
        
        if ($Usuario != null)
        {
            @session_start();
            $_SESSION[UsuarioController::SESSION_USUARIO] = $Usuario;
            header("Location: index.php");
        }
        else
        {
            return false;
        }
    }
    
    /**
     * Função para validar a sessão do usuário.
     * @return boolean
     */
    public function validarSessao()
    {
        @session_start();
        $resultadoValidacao = false;
        
        if (isset($_SESSION[UsuarioController::SESSION_USUARIO]))
        {        
            $Usuario = $_SESSION[UsuarioController::SESSION_USUARIO];

            $UsuarioModel = new UsuarioModel();
            $Usuario = $UsuarioModel->buscarPorEmailESenha($Usuario);
            
            if ($Usuario != null)
            {
                $resultadoValidacao = true;
            }
        }
        else
        {
            $resultadoValidacao = false;
        }
        
        if ($resultadoValidacao == false)
        {
            @session_destroy();
            header("Location: logar.php");
            return false;
        }
    }
    
    /**
     * Função para finalizar a sessão atual do usuário.
     */
    public function finalizarSessao()
    {
        @session_start();
        @session_destroy();
        $this->validarSessao();
    }
       
    /**
     * Função para retornar o nome do usuário atual da sessão.
     * @return String
     */
    public function getNomeUsuarioSessao()
    {
        @session_start();
        return $_SESSION[UsuarioController::SESSION_USUARIO]->getNome();
    }
    
    /**
     * Função para retornar o ID do usuário atual da sessão.
     * @return String
     */
    public function getIDUsuarioSessao()
    {
        @session_start();
        return $_SESSION[UsuarioController::SESSION_USUARIO]->getID();
    }
    
    /**
     * Função para atualizar os dados do usuário.
     * @param Usuario $Usuario
     * @return boolean
     */
    public function atualizar(Usuario $Usuario)
    {
        if ($Usuario->getNome() == "")
        {
            die("O nome não foi informado corretamente.");
        }
        else if ($Usuario->getEmail() == "")
        {
            die("O email não foi informado corretamente.");
        }
        else
        {
            $UsuarioModel = new UsuarioModel();
            $UsuarioModel->atualizar($Usuario);
        }
    }
    
    /**
     * Função para alterar a senha de um determinado usuário a partir de seu ID.
     * @param int $idUsuario ID do usuário que terá sua senha alterada.
     * @param string $senhaAtual Senha atual deste usuário.
     * @param string $novaSenha A senha nova para este usuário.
     * @param string $confirmacaoSenha A confirmação da senha nova para este usuário.
     */
    public function alterarSenha($idUsuario, $senhaAtual, $novaSenha, $confirmacaoSenha)
    {   
        $UsuarioModel = new UsuarioModel();
        
        if ($idUsuario == "")
        {
            die ("O ID do usuário não foi informado corretamente.");
        }
        else if ($senhaAtual != $UsuarioModel->buscarSenhaUsuario($idUsuario))
        {
            die ("A senha informada como senha atual não corresponde a senha do usuário informado.");
        }
        else if (str_replace (" ", "", $novaSenha) == "")
        {
            die ("A nova senha não foi informada corretamente.");
        }
        else if ($novaSenha != $confirmacaoSenha)
        {
            die ("A nova senha e a sua confirmação não estão equivalentes.");
        }
        else
        {
            $UsuarioModel->atualizarSenha($idUsuario, $senhaAtual, $novaSenha);
        }
    }
}

?>