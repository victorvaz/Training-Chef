<div class="navbar-wrapper">
    <div class="container">
        <div class="navbar navbar-inverse navbar-static-top">      
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Training Chef</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li <?php if ($_SERVER['PHP_SELF'] == '/trainingchef/index.php'){ ?>class="active"<?php } ?>>
                        <a href="index.php">Home</a>
                    </li>
                    <li <?php if ($_SERVER['PHP_SELF'] == '/trainingchef/pratos.php'){ ?>class="active"<?php } ?>>
                        <a href="pratos.php">Pratos</a>
                    </li>
                    <li <?php if ($_SERVER['PHP_SELF'] == '/trainingchef/destaque.php'){ ?>class="active"<?php } ?>>
                        <a href="destaque.php">Destaque do mês</a>
                    </li>
                    <li <?php if ($_SERVER['PHP_SELF'] == '/trainingchef/restaurantes.php'){ ?>class="active"<?php } ?>>
                        <a href="restaurantes.php">Restaurantes</a>
                    </li>
                    <li <?php if ($_SERVER['PHP_SELF'] == '/trainingchef/patrocinadores.php'){ ?>class="active"<?php } ?>>
                        <a href="patrocinadores.php">Patrocinadores</a>
                    </li>
                    <li <?php if ($_SERVER['PHP_SELF'] == '/trainingchef/quemsomos.php'){ ?>class="active"<?php } ?>>
                        <a href="quemsomos.php">Quem somos</a>
                    </li>
                    <li <?php if ($_SERVER['PHP_SELF'] == '/trainingchef/acessar.php'){ ?>class="active"<?php } ?>>
                        <a href="acessar.php">Acessar</a>
                    </li>
                    <li class="dropdown <?php if ($_SERVER['PHP_SELF'] == '/trainingchef/cozinheiro.php' || $_SERVER['PHP_SELF'] == '/trainingchef/restaurante.php'){ ?>active<?php } ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastrar<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="cozinheiro.php">Sou um cozinheiro!</a></li>
                            <li class="divider"></li>
                            <li><a href="restaurante.php">Sou um restaurante!</a></li>
                        </ul>
                    </li>	
                </ul>
            </div>
        </div>
    </div>
</div>