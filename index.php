<!DOCTYPE html>
<html lang="pt-br">
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
	</head>
	<body>
		<div class="navbar-wrapper">
			<div class="container">
				<div class="navbar navbar-inverse navbar-static-top">      
			        <div class="navbar-header">
					    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
					    </a>
				        <a class="navbar-brand" href="index.php">Training Chef</a>
			        </div>
			        <div class="navbar-collapse collapse">
				        <ul class="nav navbar-nav">
				            <li class="active"><a href="index.php">Home</a></li>
							<li><a href="pratos.html">Pratos</a></li>
							<li><a href="destaque.html">Destaque do Mês</a></li>
				            <li><a href="estabelecimentoscadastrados.html">Estabelecimentos Cadastrados</a></li>
				            <li><a href="parceiros.html">Parceiros</a></li>
							<li><a href="quemsomos.html">Quem Somos</a></li>
							<li><a href="login.html">Login</a></li>	
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastrar<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="fisico.php">Fisico</a></li>
									<li class="divider"></li>
									<li><a href="juridico.html">Jurídico</a></li>                
								</ul>
							</li>	
						</ul>
			        </div>
				</div>
		  </div><!-- /container -->
	</div><!-- /navbar wrapper -->

	<!-- Carousel ================================================== -->
	<div id="myCarousel" class="carousel slide">
		<!-- Indicators -->
			<ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
			    <div class="item active">
				    <img src="img/slide1.png" class="img-responsive">
				    <div class="container">
				        <div class="carousel-caption">
					        <h1>Training Chef</h1>
					        <p>Encontre os mais varidados pratos para seu Restaurante.</p>
				            <p><a class="btn btn-lg btn-primary" href="pratos.html">Pratos</a></p>
						</div>
			        </div>
				</div>
			    <div class="item">
				    <img src="img/slide3.png" class="img-responsive">
				    <div class="container">
				        <div class="carousel-caption">
					        <h1>Training Chef</h1>
					        <p>Encontre os melhores Restaurantes para apresentar seu prato.</p>
					        <p><a class="btn btn-large btn-primary" href="estabelecimentos.html">Restaurante</a></p>
				        </div>
			        </div>
			    </div>
			    <div class="item">
					<img src="img/slide2.png" class="img-responsive">
				    <div class="container">
				        <div class="carousel-caption">
					        <h1>Training Chef</h1>
					        <p>O prazer da comida é o único que, desfrutado com moderação, não acaba por cansar...</p>
					        <p><a class="btn btn-large btn-primary" href="pratos.html">Receitas</a>
				        </div>
			        </div>
			    </div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="icon-next"></span>
			</a>  
		</div>

		<div class="container marketing">
			<div class="row">
			    <div class="col-md-4 text-center">
				    <img class="img-circle" src="img/peq-arrozb.png">
				    <h2>Arroz com Brócolis</h2>
				    <p>Opção saudável e super rápida para um dia corrido. Simplesmente arroz com brócolis já vai fazer com que você se sinta feliz.</p>
				    <p><a class="btn btn-default" href="arrozbrocolis.html">Ver Detalhes »</a></p>
			    </div>
			    <div class="col-md-4 text-center">
				    <img class="img-circle" src="img/peq-galinhada.png">
				    <h2>Galinhada Mineira</h2>
				    <p>A culinária mineira é sem dúvida umas das melhoras entre as demais regiões de nosso país, esperamos que gostem da receita que disponibilizamos.</p>
				    <p><a class="btn btn-default" href="galinhada.html">Ver Detalhes »</a></p>
			    </div>
				<div class="col-md-4 text-center">
				    <img class="img-circle" src="img/peq-peixe.png">
				    <h2>Tambaqui com farofa de peixe</h2>
			        <p>Tempere o tambaqui com limão, alho, gengibre, tucupi e sal. Coloque em uma assadeira com azeite, tomate, cebola e pimentões e deixe assar.</p>
				    <p><a class="btn btn-default" href="tambaqui.html">Ver Detalhes »</a></p>
			    </div>
			</div>
			<hr class="featurette-divider">
			<div class="featurette">
				<img class="featurette-image img-square pull-right" src="img/medalhao.png">
			    <h2 class="featurette-heading">
					Destaque do Mês.<span class="text-muted">Este prato foi o que teve maior aprovação durante o mês de "Outubro"</span>
				</h2>
				<p class="lead">
					Medalhão: Corte o filé em fatias de dois dedos. Coloque a fatia do bacon em volta e prenda com palito se precisar. Tempere com sal e pimenta. Grelhe em uma frigideira primeiro a parte do bacon (laterais) depois os dois lados e deixe no ponto desejado.
				</p>
				<p><a class="btn btn-default" href="medalhao.html">Ver Detalhes »</a></p>
			</div>
			<hr class="featurette-divider">

			<div class="footergeral">
				<div class="footer-grid1">
					<h3>INFORMAÇÕES</h3>
                    <li type="circle">
                        <p>Training Chef, é uma  aplicação web, com o intuito de incentivar futuros cozinheiros a mostrarem seu talento na arte de cozinhar, em restaurantes que adotem esta ideia inovadora.</p>
                        <p><a class="btn btn-default" href="quemsomos.html">Ver mais »</a></p>
                    </li>
				</div>
				<div class="footer-grid1">
					<h3>Navegação</h3>
                    <ul>
                        <li type="circle"><a href="destaque.html"> Destaque do Mês</a></li>
                        <li type="circle"><a href="pratos.html"> Receitas</a></li>
                        <li type="circle"><a href="parceiros.html">Parceiros</a></li>
                        <li type="circle"><a href="cadastrar.html">Cadastrar</a></li>
                        <li type="circle"><a href="login.html">Login</a></li>
                    </ul>						
				</div>
				<div class="footer-grid1">
					<h3>Curta nossa página</h3>
                    <div>
	                    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Ftrainningchef&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;" allowTransparency="true"></iframe>
                    </div>
				</div>
			</div>   
		</div>
      	<p class="pull-right"><a href="#">Voltar ao Topo</a></p>
		<p class="direito">Copyright © 2014; Training Chef; Direitos Reservados</p>
	</div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>