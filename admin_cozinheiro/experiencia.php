<?php

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

        <title>Cadastrar Novo Prato</title>

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
            <h1>Minhas experiências</h1>
            <form class="form-signin" role="form" action="" method="post">
                <div class="row">
                    <div class="col-md-5">
                        <p><input class="form-control" type="text" autofocus required placeholder="Nome da função" /></p>                        
                        <p>Início:
                            <select name="mes_inicio" class="form-inline">
                                <option value="">mês</option>
                                <?php include 'view/options_mes.php'; ?>
                            </select> / 
                            <select name="ano_inicio" class="form-inline">
                                <option value="">ano</option>
                                <?php include 'view/options_ano.php'; ?>
                            </select>
                        </p>
                        <p>Fim:
                            <select name="mes_fim" class="form-inline">
                                <option value="">mês</option>
                                <?php include 'view/options_mes.php'; ?>
                            </select> / 
                            <select name="ano_fim" class="form-inline">
                                <option value="">ano</option>
                                <?php include 'view/options_ano.php'; ?>
                            </select>
                        </p>
                    </div>
                    <div class="col-md-7">
                        <p><textarea class="form-control" rows="3" required placeholder="Conte mais um pouco sobre o que você fazia"></textarea></p>
                    </div>
                </div>
                <br>
                <p class="pull-right"><button class="btn btn-lg btn-primary" name="btn_salvar" type="submit">Salvar</button></p>
            </form>
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