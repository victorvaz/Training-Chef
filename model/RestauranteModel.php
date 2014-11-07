<?php
if (file_exists('../DAL.php')) { require_once '../DAL.php'; }
else { require_once 'DAL.php'; }

if (file_exists('../entity/Restaurante.php')) { require_once '../entity/Restaurante.php'; }
else { require_once 'entity/Restaurante.php'; }

class RestauranteModel
{
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
    }
}
?>