<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Meus Pratos</title>

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

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Training Chef</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="meus_pratos.html">Home</a></li>
            <li><a href="meu_perfil.html">Meu Perfil</a></li>
            <li class="active"><a href="meus_pratos.html">Meus Pratos</a></li>
          </ul>
          <p class="nav navbar-form pull-right">
          	<span class="text-primary">Seja bem-vindo</span> 
            <button class="btn btn-xs" type="button">Sair</button>
          </p>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
        <br><br><br>
        <div class="jumbotron">
            <div class="container">
                <h1>Meus Pratos</h1>
                <p>Veja os seus pratos que estão na disputa por uma oportunidade em um restaurante!</p>
                <h3><a class="label label-default" href="cadastrar_prato.html" role="button">Cadastrar</a></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2>Feijoada</h2>
                <p><img class="img-thumbnail" src="img/feijoada.jpeg" width="100%" /></p>
                <p>A feijoada é um prato que consiste num guisado de feijão com carne, normalmente acompanhado com arroz.</p>
                <p><a class="btn btn-lg btn-link" href="#" role="button">Editar</a></p>
            </div>
            <div class="col-md-4">
                <h2>Moqueca</h2>
                <p><img class="img-thumbnail" src="img/Moquecadecamarao.jpg" width="100%" /></p>
                <p>A moqueca é um cozido de peixe com camarão, lagosta, palmito e frutos do mar com diferentes temperos. Tradicional item da culinária capixaba e baiana, apresentando variações na paraense.</p>
                <p><a class="btn btn-lg btn-link" href="#" role="button">Editar</a></p>
            </div>
            <div class="col-md-4">
                <h2>Acarajé</h2>
                <p><img class="img-thumbnail" src="img/4c883dd4574cac9a401da98517f9cf33206.jpg" width="100%" /></p>
                <p>O acarajé é uma especialidade gastronômica da culinária afro-brasileira feita de massa de feijão-fradinho, cebola e sal, frita em azeite de dendê. O acarajé pode ser servido com pimenta, camarão seco, vatapá e caruru.</p>
                <p><a class="btn btn-lg btn-link" href="#" role="button">Editar</a></p>
            </div>
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