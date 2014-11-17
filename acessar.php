<?php require_once 'controller/UsuarioController.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Training Chef</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'view/menu_navegacao.php'; ?>
        <?php include 'view/slider.php'; ?>
        <!--login modal-->
        <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="index.php"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></a>
                        <h1 class="text-center">Training Chef</h1><br>
                        <p class="text-info text-center">Informe seu usuário e senha para acessar sua conta!</p>
                    </div>
                    <?php if (isset($_POST['btn_entrar'])) : ?>
                        <?php $cUsuario = new Usuario(); ?>
                        <?php $cUsuario->setEmail($_POST['email']); ?>
                        <?php $cUsuario->setSenha($_POST['senha']); ?>
                        <?php $cUsuarioController = new UsuarioController(); ?>
                        <?php $cUsuarioController->logar($cUsuario); ?>
                    <?php endif; ?>
                    <div class="modal-body">
                        <form name="form_logar" method="post" action="" class="form col-md-12 ">
                            <div class="form-group">
                                <input name="email" type="text" class="form-control input-lg" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input name="senha" type="password" class="form-control input-lg" placeholder="Senha">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="btn_entrar" class="btn btn-primary btn-lg btn-block">Entrar</button>
                            </div>
                            <p class="text-info text-center">Ainda não tem uma conta?</p>
                            <p><a href="cozinheiro.php">Quero me cadastrar como cozinheiro!</a> ou <a href="restaurante.php">Quero me cadastrar como restaurante!</a></p>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-12">
                            <a href="index.php"><button class="btn" data-dismiss="modal" aria-hidden="true">Ir para a página inicial do site</button></a>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
        <div class="container marketing">
            <?php include 'view/rodape.php'; ?>
        </div>
    </body>
</html>