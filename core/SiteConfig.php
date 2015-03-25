<?php

/*
 * Esta classe é responsável por gerenciar todas as informações estáticas do site,
 * como, por exemplo, o nome do site.
 */

/**
 * Classe de configuração
 * @author Victor Vaz de Oliveira <victor-vaz@hotmail.com>
 */
class SiteConfig
{
    /**
     * Nome do site
     * @var String
     */
    public static $NOME_SITE = "Training Chef";
    
    /**
     * Caminho da logotipo do site
     * @var String
     */
    public static $LOGOTIPO_HORIZONTAL = "view/images/logotipo_horizontal.png";
    
    /**
     * Prefixo do endereço para as páginas
     * @var type 
     */
    public static $PREFIXO_ENDERECO = "/trainingchef/";
    
    /**
     * Páginas de menu
     * @var type 
     */
    public static $MENU_PAGINAS = array(
        0 => array(
            'href' => 'index.php',
            'desc' => 'Home'
        ),
        1 => array(
            'href' => 'quem_somos.php',
            'desc' => 'Sobre o projeto'
        ),
        2 => array(
            'href' => 'cadastrar.php',
            'desc' => 'Cadastrar'
        ),
        3 => array(
            'href' => 'logar.php',
            'desc' => 'Acessar'
        )
    );
}