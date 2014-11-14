<?php
if (isset($_POST['btn_enviar'])) {
    require_once 'controller/CozinheiroController.php';

    $cCozinheiro = new Cozinheiro();
    $cCozinheiro->setNome($_POST['nome']);
    $cCozinheiro->setDataNasc($_POST['ano'] . '-' . $_POST['mes'] . '-' . $_POST['dia']);
    $cCozinheiro->setTelefoneParticular($_POST['telefone_particular']);
    $cCozinheiro->setTelefoneOpcional($_POST['telefone_opcional']);
    $cCozinheiro->setEmail($_POST['email']);
    $cCozinheiro->setSenha($_POST['senha']);
    $cCozinheiro->setCPF($_POST['cpf']);
    $cCozinheiro->setEndereco($_POST['endereco']);
    $cCozinheiro->setNumero($_POST['numero_endereco']);
    $cCozinheiro->setBairro($_POST['bairro']);
    $cCozinheiro->setCidade($_POST['cidade']);
    $cCozinheiro->setEstado($_POST['estado']);
    $cCozinheiro->setCEP($_POST['cep']);
    $cCozinheiro->setFoto($_POST['anexo']);

    $cCozinheiroController = new CozinheiroController();
    $cCozinheiroController->cadastrar($cCozinheiro);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Trainning Chef</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <?php include 'view/menu_navegacao.php'; ?>
        <?php include 'view/slider.php'; ?>
        <!-- Inicio Tela de Formulario -->
        <div class="container marketing">
            <p class="text-info">Preencha o formulário para se cadastrar</p>
            <br>
            <form action="cozinheiro.php" method="post">
                <fieldset>
                    <legend>Dados pessoais</legend>

                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label for="nascimento">Nascimento
                            <input type="text" name="dia" size="2" maxlength="2" placeholder="dd" id="nascimento"> 
                            <input type="text" name="mes" size="2" maxlength="2" placeholder="mm" id="nascimento"> 
                            <input type="text" name="ano" size="4" maxlength="4" placeholder="aaa" id="nascimento">
                        </label>
                    </div>	

                    <div class="form-group">
                        <label for="telefone">Telefone Particular
                            <input type="tel" name="telefone_particular" id="telefone"
                                   placeholder="(00) 0000-0000" required autocomplete="tel">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone Opcional
                            <input type="tel" name="telefone_opcional" id="telefone"
                                   placeholder="(00) 0000-0000" autocomplete="tel">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input type="email" class="form-control"
                                   id="email" name="email" placeholder="email@exemplo.com">
                        </div>
                    </div>

                    <label for="email">Confirmar Email</label>
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="fonf-email" class="form-control"
                               id="fonf-email" name="conf_email" placeholder=" Confirmar email@exemplo.com">
                    </div>

                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required placeholder="000.000.000-00">
                    </div>							
                </fieldset>

                <br>
                <br>

                <fieldset>
                    <legend>Dados de Endereço</legend>

                    <div class="form-group">
                        <label for="rua">Rua</label>
                        <input type="text" class="form-control" id="rua" name="endereco" required>
                    </div>

                    <div class="form-group">
                        <label for="n">Número
                            <input type="text" id="n" name="numero_endereco" required>
                        </label>
                    </div>							 

                    <div class="form-group">
                        <label for="estado">Estado
                            <select name="estado" id="estado" required>
                                <option value="ac">Acre</option> 
                                <option value="al">Alagoas</option> 
                                <option value="am">Amazonas</option> 
                                <option value="ap">Amapá</option> 
                                <option value="ba">Bahia</option> 
                                <option value="ce">Ceará</option> 
                                <option value="df">Distrito Federal</option> 
                                <option value="es">Espírito Santo</option> 
                                <option value="go">Goiás</option> 
                                <option value="ma">Maranhão</option> 
                                <option value="mt">Mato Grosso</option> 
                                <option value="ms">Mato Grosso do Sul</option> 
                                <option value="mg">Minas Gerais</option> 
                                <option value="pa">Pará</option> 
                                <option value="pb">Paraíba</option> 
                                <option value="pr">Paraná</option> 
                                <option value="pe">Pernambuco</option> 
                                <option value="pi">Piauí</option> 
                                <option value="rj">Rio de Janeiro</option> 
                                <option value="rn">Rio Grande do Norte</option> 
                                <option value="ro">Rondônia</option> 
                                <option value="rs">Rio Grande do Sul</option> 
                                <option value="rr">Roraima</option> 
                                <option value="sc">Santa Catarina</option> 
                                <option value="se">Sergipe</option> 
                                <option value="sp">São Paulo</option> 
                                <option value="to">Tocantins</option>
                            </select>	
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="bairro">Bairro
                            <input type="text" id="bairro" name="bairro" required>
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="cidade">Cidade
                            <input type="text" id="cidade" name="cidade" required>
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="cep">Cep
                            <input type="text" name="cep" size="5" maxlength="5"> - <input type="text" name="cep2" size="3" maxlength="3" required>
                        </label>
                    </div>
                </fieldset>

                <br>
                <br>
                <fieldset>
                    <legend>Dados de Login</legend>
                    <br>
                    <div class="form-group">
                        <label for="anexo">Selecione foto</label>
                        <input type="file" name="anexo" id="anexo">
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>

                    <div class="form-group">
                        <label for="con-senha">Confirmar Senha</label>
                        <input type="password" class="form-control" id="conf_senha" name="con-senha" required>
                    </div>			  			  

                </fieldset>	
                <br>
                <br>
                <button type="submit" name="btn_enviar" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-primary">Limpar</button>
                <a href="index.html"> <button type="button" class="btn btn-primary">Voltar</button></a>
                <br>
                <br>		
            </form>
            <?php include 'view/rodape.php'; ?>
        </div><!-- /.container -->
</body>
</html>