<?php
if (file_exists('../DAL.php')) { require_once '../DAL.php'; }
else { require_once 'DAL.php'; }

if (file_exists('../entity/Cozinheiro.php')) { require_once '../entity/Cozinheiro.php'; }
else { require_once 'entity/Cozinheiro.php'; }

class CozinheiroModel
{
    /**
     * Função para cadastrar um cozinheiro.
     * @author Víctor Vaz de Oliveira <victor-vaz@hotmail.com>
     * @data 14/11/2014
     * @param Cozinheiro $cCozinheiro Entidade Cozinheiro
     * @return boolean
     */
    public function cadastrarCozinheiro(Cozinheiro $cCozinheiro)
    {
        $cDAL = new DAL();
        $cDAL->conectar();

        $sqlCadastraCozinheiro = "INSERT INTO cozinheiro (nome,
                                                        data_nasc,
                                                        telefone_particular,
                                                        telefone_opcional,
                                                        email,
                                                        senha,
                                                        cpf,
                                                        endereco,
                                                        numero,
                                                        estado,
                                                        bairro,
                                                        cidade,
                                                        cep,
                                                        foto)
                                                VALUES ('" . $cCozinheiro->getNome() . "',
                                                        '" . $cCozinheiro->getDataNasc() . "',
                                                        '" . $cCozinheiro->getTelefoneParticular() . "',
                                                        '" . $cCozinheiro->getTelefoneOpcional() . "',
                                                        '" . $cCozinheiro->getEmail() . "',
                                                        '" . $cCozinheiro->getSenha() . "',
                                                        '" . $cCozinheiro->getCPF() . "',
                                                        '" . $cCozinheiro->getEndereco() . "',
                                                        '" . $cCozinheiro->getNumero() . "',
                                                        '" . $cCozinheiro->getEstado() . "',
                                                        '" . $cCozinheiro->getBairro() . "',
                                                        '" . $cCozinheiro->getCidade() . "',
                                                        '" . $cCozinheiro->getCEP() . "',
                                                        '" . $cCozinheiro->getFoto() . "')";
        mysql_query($sqlCadastraCozinheiro)
                or die ("Aconteceu um erro: Não foi possível cadastrar o cozinheiro.");
        
        return true;
    }
    
    /**
     * Função para buscar um determinado cozinheiro por ID.
     * @author Víctor Vaz de Oliveira <victor-vaz@hotmail.com>
     * @data 16/11/2014
     * @param int $id
     * @return boolean|\Cozinheiro
     */
    public function buscarDadosCozinheiroPorId($id)
    {
        $cDAL = new DAL();
        $cDAL->conectar();
        
        $sqlBuscaDadosCozinheiro = "SELECT id,
                                           nome,
                                           data_nasc,
                                           telefone_particular,
                                           telefone_opcional,
                                           email,
                                           senha,
                                           cpf,
                                           endereco,
                                           numero,
                                           estado,
                                           bairro,
                                           cidade,
                                           cep,
                                           foto,
                                           quem_sou,
                                           site
                                      FROM cozinheiro
                                     WHERE id = " . $id . ";";
        
        $queryBuscaDadosCozinheiro = mysql_query($sqlBuscaDadosCozinheiro)
                or die ("Aconteceu um erro: Não foi possível cadastrr o cozinheiro.");
        
        if (mysql_num_rows($queryBuscaDadosCozinheiro) > 0)
        {
            $rowBuscaDadosCozinheiro = mysql_fetch_array($queryBuscaDadosCozinheiro);
            
            $cCozinheiro = new Cozinheiro();
            $cCozinheiro->setId($rowBuscaDadosCozinheiro['id']);
            $cCozinheiro->setNome($rowBuscaDadosCozinheiro['nome']);
            $cCozinheiro->setDataNasc($rowBuscaDadosCozinheiro['data_nasc']);
            $cCozinheiro->setTelefoneParticular($rowBuscaDadosCozinheiro['telefone_particular']);
            $cCozinheiro->setTelefoneOpcional($rowBuscaDadosCozinheiro['telefone_opcional']);
            $cCozinheiro->setEmail($rowBuscaDadosCozinheiro['email']);
            $cCozinheiro->setSenha($rowBuscaDadosCozinheiro['senha']);
            $cCozinheiro->setCPF($rowBuscaDadosCozinheiro['cpf']);
            $cCozinheiro->setEndereco($rowBuscaDadosCozinheiro['endereco']);
            $cCozinheiro->setNumero($rowBuscaDadosCozinheiro['numero']);
            $cCozinheiro->setEstado($rowBuscaDadosCozinheiro['estado']);
            $cCozinheiro->setBairro($rowBuscaDadosCozinheiro['bairro']);
            $cCozinheiro->setCidade($rowBuscaDadosCozinheiro['cidade']);
            $cCozinheiro->setCEP($rowBuscaDadosCozinheiro['cep']);
            $cCozinheiro->setFoto($rowBuscaDadosCozinheiro['foto']);
            $cCozinheiro->setQuemSou($rowBuscaDadosCozinheiro['quem_sou']);
            $cCozinheiro->setSite($rowBuscaDadosCozinheiro['site']);
            
            return $cCozinheiro;
        }
        else
        {
            return false;
        }
    }
    
    /**
     * Função para buscar a existência de um cadastro de cozinheiro
     * @author Víctor Vaz de Oliveira <victor-vaz@hotmail.com>
     * @data 14/11/2014
     * @param Cozinheiro $cCozinheiro
     * @return boolean Retorna o Cozinheiro caso exista ou FALSE caso não exista.
     */
    public function verificarExistenciaCozinheiro(Cozinheiro $cCozinheiro)
    {
        $DAL = new DAL();
        $DAL->conectar();
        
        $sqlBuscaExistenciaCozinheiro = "SELECT id,
                                                email,
                                                senha
                                           FROM cozinheiro
                                          WHERE email = '" . $cCozinheiro->getEmail() . "'
                                            AND senha = '" . $cCozinheiro->getSenha() . "'";
        
        $queryBuscaExistenciaCozinheiro = mysql_query($sqlBuscaExistenciaCozinheiro)
                or die ("Aconteceu um erro: Não foi possível cadastrar o cozinheiro.");
        
        $rowBuscaExistenciaCozinheiro = mysql_fetch_array($queryBuscaExistenciaCozinheiro);
        
        if (mysql_num_rows($queryBuscaExistenciaCozinheiro) > 0)
        {
            $resultadoCozinheiro = new Cozinheiro();
            $resultadoCozinheiro->setId($rowBuscaExistenciaCozinheiro['id']);
            $resultadoCozinheiro->setEmail($rowBuscaExistenciaCozinheiro['email']);
            $resultadoCozinheiro->setSenha($rowBuscaExistenciaCozinheiro['senha']);
            
            return $resultadoCozinheiro;
        }
        else
        {
            return false;
        }
    }
}

?>