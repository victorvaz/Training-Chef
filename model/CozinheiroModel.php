<?php

if (file_exists('../core/DAL.php')) { require_once '../core/DAL.php'; }
else { require_once 'core/DAL.php'; }

if (file_exists('../entity/Cozinheiro.php')) { require_once '../entity/Cozinheiro.php'; }
else { require_once 'entity/Cozinheiro.php'; }

if (file_exists('Model.php')) { require_once 'Model.php'; }
else { require_once 'model/Model.php'; }

/**
 * Classe modelo para a entidade Cozinheiro
 * @author Victor Vaz de Oliveira <victor-vaz@hotmail.com>
 */
class CozinheiroModel implements Model
{
}

?>