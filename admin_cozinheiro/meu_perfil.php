<?php
    include_once '../controller/CozinheiroController.php';

    $cCozinheiroController = new CozinheiroController();
    $cUsuarioController = new UsuarioController();
    
    $cCozinheiro = $cCozinheiroController->buscarPerfilCozinheiro($_SESSION[INDICE_SESSION_ID_USUARIO]);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../favicon.ico">
        <title>Meu Perfil</title>
        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="starter-template.css" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <?php include 'view/menu_navegacao.php'; ?>
        <div class="container">
            <br><br><br>
            <div class="row">
                <div class="col-sm-3">
                    <p><img class="img-thumbnail" src="img/perfil.jpg" width="100%" /></p>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Quer me contratar? <a class="btn btn-link" href="#" role="button">Editar</a></h3>
                        </div>
                        <div class="panel-body">
                            <p><b>Telefones:</b><br>
                                <?php if ($cCozinheiro->getTelefoneParticular() != "") : ?>
                                    <span><?php print $cCozinheiro->getTelefoneParticular(); ?></span><br>
                                <?php else : ?>
                                    <span class="text-info">Você ainda não adicionou um telefone particular...</span><br>
                                <?php endif; ?>
                                    
                                <?php if ($cCozinheiro->getTelefoneOpcional()   != "") : ?>
                                    <span><?php print $cCozinheiro->getTelefoneOpcional(); ?></span><br>
                                <?php else : ?>
                                    <span class="text-info">Você ainda não adicionou um telefone opcional...</span><br>
                                <?php endif; ?>
                            </p>
                            
                            <p><b>E-mail:</b><br>
                                <span><?php print $cCozinheiro->getEmail(); ?></span>
                            </p>
                            
                            <p><b>Site:</b><br>
                                <?php if ($cCozinheiro->getSite() != "") : print $cCozinheiro->getSite(); ?>
                                <?php else : ?>
                                    <span class="text-info">Você ainda não adicionou um site...</span>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Quem sou? <a class="btn btn-link" href="#" role="button">Editar</a></h3>
                        </div>
                        <div class="panel-body">
                            <p><b><?php print $cCozinheiro->getNome(); ?></b>, <?php print $cUsuarioController->mostrarIdadeCozinheiro($cCozinheiro->getDataNasc()); ?> anos, <?php print $cCozinheiro->getCidade(); ?>, <?php print $cCozinheiro->getEstado(); ?>, Brasil.</p>
                            <?php if ($cCozinheiro->getQuemSou() == "") : ?>
                                <p class="text-info text-justify">Você ainda não adicionou uma descrição sobre você...</p>
                            <?php else : ?>
                                <p><?php print $cCozinheiro->getQuemSou(); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Experiência <a class="btn btn-link" href="#" role="button">Editar</a></h3>
                        </div>
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">Sub Chefe de Cozinha - 01/2014 até 08/2014 ( 7 meses )</h4>
                                    <p class="list-group-item-text">Elaboração e Execução de Cardápio, Conferência de Estoque, Administração Geral da Cozinha e Gestão de Funcionários.</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">Chefe de Cozinha - 07/2013 até 01/2014 ( 6 meses )</h4>
                                    <p class="list-group-item-text">Elaboração e Execução de Cardápio, Conferência de Estoque, Compras, Administração Geral da Cozinha e Gestão de Funcionários.</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">Chef de Cozinha - 06/2012 até 11/2012 ( 5 meses )</h4>
                                    <p class="list-group-item-text">Elaboração e Execução de Cardápio, Conferência de Estoque, Compras, Administração Geral da Cozinha e Gestão de Funcionários.</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="list-group-item-heading">Chef de Cozinha - 01/2011 até 03/2011 ( 2 meses )</h4>
                                    <p class="list-group-item-text">Elaboração e Execução de Cardápio, Conferência de Estoque, Compras e Administração Geral da Cozinha.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-sm-4 -->
            </div>
        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>