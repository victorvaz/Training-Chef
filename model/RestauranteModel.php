<?php
if (file_exists('../DAL.php')) { require_once '../DAL.php'; }
else { require_once 'DAL.php'; }

if (file_exists('../entity/Restaurante.php')) { require_once '../entity/Restaurante.php'; }
else { require_once 'entity/Restaurante.php'; }

class RestauranteModel
{
    /**
     * Função para cadastrar um Restaurante
     * @author Víctor Vaz de Oliveira <victor-vaz@hotmail.com.br>
     * @data 14/11/2014
     * @param Restaurante $cRestaurante
     * @return boolean
     */
    public function cadastrarRestaurante(Restaurante $cRestaurante)
    {
        $cDAL = new DAL();
        $cDAL->conectar();
        
        $sqlCadastraRestaurante = "INSERT INTO restaurante (nome,
                                                            descricao,
                                                            telefone_comercial_primario,
                                                            telefone_comercial_secundario,
                                                            cnpj,
                                                            razao_social,
                                                            endereco,
                                                            numero,
                                                            estado,
                                                            bairro,
                                                            cidade,
                                                            cep,
                                                            email,
                                                            senha,
                                                            foto)
                                                    VALUES ('".$cRestaurante->getNome()."',
                                                            '".$cRestaurante->getDescricao()."',
                                                            '".$cRestaurante->getTelefoneComercialPrimario()."',
                                                            '".$cRestaurante->getTelefoneComercialSecundario()."',
                                                            '".$cRestaurante->getCNPJ()."',
                                                            '".$cRestaurante->getRazaoSocial()."',
                                                            '".$cRestaurante->getEndereco()."',
                                                            ".$cRestaurante->getNumero().",
                                                            '".$cRestaurante->getEstado()."',
                                                            '".$cRestaurante->getBairro()."',
                                                            '".$cRestaurante->getCidade()."',
                                                            '".$cRestaurante->getCEP()."',
                                                            '".$cRestaurante->getEmail()."',
                                                            '".$cRestaurante->getSenha()."',
                                                            '".$cRestaurante->getFoto()."');";
        mysql_query($sqlCadastraRestaurante)
            or die ("Aconteceu um erro: Não foi possível cadastrar o restaurante.");
        
        return true;
    }
    
    public function verificarExistenciaRestaurante(Restaurante $cRestaurante)
    {
        $DAL = new DAL();
        $DAL->conectar();
        
        $sqlBuscaExistenciaRestaurante = "SELECT id,
                                                 email,
                                                 senha
                                            FROM restaurante
                                           WHERE email = '" . $cRestaurante->getEmail() . "'
                                             AND senha = '" . $cRestaurante->getSenha() . "'";
        
        $queryBuscaExistenciaRestaurante = mysql_query($sqlBuscaExistenciaRestaurante)
                or die ("Aconteceu um erro: Não foi possível cadastrar o restaurante.");
        
        $rowBuscaExistenciaRestaurante = mysql_fetch_array($queryBuscaExistenciaRestaurante);
        
        if (mysql_num_rows($queryBuscaExistenciaRestaurante) > 0)
        {
            $resultadoRestaurante = new Restaurante();
            
            $resultadoRestaurante->setId($rowBuscaExistenciaRestaurante['id']);
            $resultadoRestaurante->setEmail($rowBuscaExistenciaRestaurante['email']);
            $resultadoRestaurante->setSenha($rowBuscaExistenciaRestaurante['senha']);
            
            return $resultadoRestaurante;
        }
        else
        {
            return false;
        }
    }
}
?>