<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Training Chef</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if ($_SERVER['PHP_SELF'] == '/trainingchef/admin_cozinheiro/index.php'){ ?>class="active"<?php } ?>>
                    <a href="index.php">Home</a>
                </li>
                <li <?php if ($_SERVER['PHP_SELF'] == '/trainingchef/admin_cozinheiro/meu_perfil.php'){ ?>class="active"<?php } ?>>
                    <a href="meu_perfil.php">Meu Perfil</a>
                </li>
                <li <?php if ($_SERVER['PHP_SELF'] == '/trainingchef/admin_cozinheiro/meus_pratos.php'){ ?>class="active"<?php } ?>>
                    <a href="meus_pratos.php">Meus Pratos</a>
                </li>
            </ul>
            <p class="nav navbar-form pull-right">
                <span class="text-primary">Seja bem-vindo</span> 
                <button class="btn btn-xs" type="button">Sair</button>
            </p>
        </div>
    </div>
</div>