<?php
@session_start();

if (file_exists('../entity/Usuario.php')) { require_once '../entity/Usuario.php'; }
else { require_once 'entity/Usuario.php'; }

if (file_exists('../entity/Cozinheiro.php')) { require_once '../entity/Cozinheiro.php'; }
else { require_once 'entity/Cozinheiro.php'; }

if (file_exists('../model/CozinheiroModel.php')) { require_once '../model/CozinheiroModel.php'; }
else { require_once 'model/CozinheiroModel.php'; }

if (file_exists('../entity/Restaurante.php')) { require_once '../entity/Restaurante.php'; }
else { require_once 'entity/Restaurante.php'; }

if (file_exists('../model/RestauranteModel.php')) { require_once '../model/RestauranteModel.php'; }
else { require_once 'model/RestauranteModel.php'; }

class UsuarioController
{    
    /**
     * Função para fazer login com um usuário.
     * @author Víctor Vaz de Oliveira <victor-vaz@hotmail.com>
     * @data 14/11/2014
     * @param Usuario $cUsuario
     */
    public function logar(Usuario $cUsuario)
    {
        if ($cUsuario->getEmail() == "")
        {
            ?><p class="text-danger text-center">Infome o e-mail, por favor.</p><?php
        }
        else if ($cUsuario->getSenha() == "")
        {
            ?><p class="text-danger text-center">Informe a senha por favor.</p><?php
        }
        else
        {
            $cCozinheiro = new Cozinheiro();
            $cCozinheiro->setEmail($cUsuario->getEmail());
            $cCozinheiro->setSenha($cUsuario->getSenha());

            $cCozinheiroModel = new CozinheiroModel();
            $resultadoCozinheiro = $cCozinheiroModel->verificarExistenciaCozinheiro($cCozinheiro);

            if ($resultadoCozinheiro != false)
            {
                $cUsuario->setID($resultadoCozinheiro->getId());
                $cUsuario->setEmail($resultadoCozinheiro->getEmail());
                $cUsuario->setSenha($resultadoCozinheiro->getSenha());
                
                $this->iniciarSessao($cUsuario, TIPO_USUARIO_COZINHEIRO);
                
                ?><script>window.location = "admin_cozinheiro/index.php"</script><?php
            }
            else
            {
                $cRestaurante = new Restaurante();
                $cRestaurante->setEmail($cUsuario->getEmail());
                $cRestaurante->setSenha($cUsuario->getSenha());
                
                $cRestauranteModel = new RestauranteModel();
                $resultadoRestaurante = $cRestauranteModel->verificarExistenciaRestaurante($cRestaurante);
                
                if ($resultadoRestaurante != false)
                {
                    $cUsuario->setID($resultadoRestaurante->getId());
                    $cUsuario->setEmail($resultadoRestaurante->getEmail());
                    $cUsuario->setSenha($resultadoRestaurante->getSenha());
                    
                    $this->iniciarSessao($cUsuario, TIPO_USUARIO_RESTAURANTE);
                    
                    ?><script>window.location = "admin_restaurante/index.php"</script><?php
                }
                else
                {
                    ?><p class="text-danger text-center">Usuário e/ou senha incorretos.</p><?php
                }
            }
        }
    }
    
    /**
     * Função para iniciar uma sessão de usuário de acordo com o seu tipo.
     * @author Víctor Vaz de Oliveira <victor-vaz@hotmail.com>
     * @data 14/11/2014
     * @param Usuario $cUsuario
     * @param type $tipo
     */
    public function iniciarSessao(Usuario $cUsuario, $tipo)
    {
        $_SESSION[INDICE_SESSION_ID_USUARIO] = $cUsuario->getID();
        $_SESSION[INDICE_SESSION_EMAIL_USUARIO] = $cUsuario->getEmail();
        $_SESSION[INDICE_SESSION_SENHA_USUARIO] = $cUsuario->getSenha();
        $_SESSION[INDICE_SESSION_TIPO_USUARIO] = $tipo;
        
        /** @debug **/
        // print "<script>alert('Usuário autenticado com sucesso: ID: {$_SESSION[INDICE_SESSION_ID_USUARIO]}, E-MAIL: {$_SESSION[INDICE_SESSION_EMAIL_USUARIO]}, SENHA: {$_SESSION[INDICE_SESSION_SENHA_USUARIO]}, TIPO: {$_SESSION[INDICE_SESSION_TIPO_USUARIO]}');</script>";
    }
    
    public function mostrarIdadeCozinheiro($dataNasc)
    {
        return date("Y") - date("Y", strtotime($dataNasc));
    }
}

?>