<?php
require_once '../DAL.php';
require_once '../entity/Cozinheiro.php';

class CozinheiroModel
{
	/**
	 * Função para cadastrar um cozinheiro.
     * @author Víctor Vaz de Oliveira <victor.vaz@hotmail.com>
     * @data 05/11/2014
     */
	public function cadastrarCozinheiro(Cozinheiro $cCozinheiro)
	{
		$cDAL = new DAL();

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
			or die ("Aconteceu um erro: Não foi possível cadastrar um cozinheiro.");
	}
}

?>