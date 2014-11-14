<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Trainning Chef</title>
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
        <!-- Inicio Tela de Formulario -->
        <div class="container marketing">
            <p class="text-info">Preencha o formulário para se cadastrar</p>
            <br>
            <form action="cadastrar.html" method="get">
                <fieldset>
                    <legend>Dados do Estabelecimento</legend>

                    <div class="form-group">
                        <label for="nome">Nome do restaurante</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label for="nome">Conte mais um pouco sobre seu restaurante</label>
                        <input type="text" class="form-control" id="descricao" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone comercial 1
                            <input type="tel" name="telefone" id="telefone_comericai_primario"
                                   placeholder="(dd) 0000-0000" required autocomplete="tel">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone comercial 2
                            <input type="tel" name="telefone" id="telefone_comericai_secundario"
                                   placeholder="(dd) 0000-0000" required autocomplete="tel">
                        </label>
                    </div>						

                    <div class="form-group">
                        <label for="cnpj">CNPJ</label>
                        <input type="text" class="form-control" id="cnpj" name="cnpj" required placeholder="000.000.000/0000-00">
                    </div>

                    <div class="form-group">
                        <label for="razao">Razão Social</label>
                        <input type="text" class="form-control" id="razao" name="razao" required>
                    </div>

                </fieldset>
                <br>
                <br>
                <fieldset>
                    <legend>Dados de Endereço</legend>

                    <div class="form-group">
                        <label for="rua">Rua</label>
                        <input type="text" class="form-control" id="rua" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label for="n">Número
                            <input type="text" id="n" name="nome" required>
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
                            <input type="text" id="bairro" name="nome" required>
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="cidade">Cidade
                            <input type="text" id="cidade" name="nome" required>
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

                    <label for="email">Email</label>
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="email" class="form-control"
                               id="email" name="email" placeholder="email@exemplo.com">
                    </div>

                    <label for="email">Confirmar Email</label>
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="fonf-email" class="form-control"
                               id="fonf-email" name="email" placeholder=" Confirmar email@exemplo.com">
                    </div>
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
                        <input type="password" class="form-control" id="con-senha" name="con-senha" required>
                    </div>			  			  

                </fieldset>	
                <br>
                <br>
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-primary">Limpar</button>
                <a href="index.php"> <button type="button" class="btn btn-primary">Voltar</button></a>
                <br>
                <br>		
            </form>
        <?php include 'view/rodape.php'; ?>
    </div><!-- /.container -->
</body>
</html>