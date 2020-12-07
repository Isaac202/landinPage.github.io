<?php
	include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<meta charset="utf-8" />
</head>
<body>

	<header>
		<div class="center menu">
			<div class="logo"><a class="a-logo" href="/">Logomarca</a></div><!--logo-->
			<nav class="menu-desktop">
				<ul class="ul-desktop">
					<li class="li-desktop"><a class="a-desktop" href="">Home</a></li>
					<li class="li-desktop"><a class="a-desktop" href="depoimentos">Depoimentos</a></li>
					<li class="li-desktop"><a class="a-desktop" href="servicos">Serviços</a></li>
					<li class="li-desktop"><a class="a-desktop" href="contato">Contato</a></li>
				</ul>
			</nav>
			 <nav class="menu-mobile">
				<ul class="ul-mobile">
					<li class="li-mobile"><a class="a-mobile"  href="">Home</a></li>
					<li  class="li-mobile" ><a class="a-mobile" href="">Depoimentos</a></li>
					<li  class="li-mobile"><a class="a-mobile" href="">Serviços</a></li>
					<li  class="li-mobile"><a class="a-mobile" href="contato">Contato</a></li>
				</ul>
				<div class="botton-mobile"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</nav>
		</div><!--center-->
	</header>

	<section class=" banner-principal">
		<div class="opacity"></div>
			<form class="center form-banner">
				<h2 class="h2-banner">Qual o seu melhor email?</h2>
				<input class="input-email" type="email" name="email" placeholder="Digite seu email...">
				<input class="input-cadastrar" type="submit" name="acao" value="Cadastrar!">
			</form>
	</section>

	<section class="descricao-autor">
		<div class="center description">
			<div class="description-text">
				<h2 class="title-name">Isaac de Oliveira</h2>
				<br>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam urna leo, finibus eu pulvinar eget, semper in tortor. Duis bibendum sem at nulla malesuada, et fermentum libero interdum. Pellentesque suscipit nibh non metus molestie, auctor molestie est cursus. Nulla a rhoncus augue, quis bibendum mi. Vivamus porta vel dolor a ornare. Maecenas bibendum lobortis interdum. Nullam congue augue non risus iaculis euismod. Nullam ultrices elit ut nulla tempor, id semper sapien malesuada. Aenean cursus vulputate mi ac fringilla.

Nullam sit amet sollicitudin risus, a feugiat neque. Vestibulum laoreet, orci non dictum pellentesque, augue tellus feugiat odio, rutrum posuere elit justo eu massa. Ut iaculis pellentesque ligula, id ullamcorper lacus luctus ut. Nam accumsan leo vel ultricies molestie. Duis a felis aliquam, suscipit leo vitae, pharetra massa. Donec laoreet feugiat sem in pulvinar. Mauris feugiat maximus quam, vitae egestas ligula dapibus egestas. Donec sed sagittis odio, at mattis arcu. Cras sed nisi dictum, venenatis risus eget, faucibus arcu. Integer vitae sem ex. In placerat est at sollicitudin dapibus. Sed nec eleifend justo, ut finibus elit.
				</p>
			</div>
			<div class="decriptin-image">
				<img class="image" src="images/my_photo.png">
			</div>
		</div>	
	</section>

	<section class=" botton ">
		<h2 class="title center">Especialidades</h2>
		<div class="botton center especialidades">
			<div class="box-especialidade">
				<h3 class="icons"><i class="fa fa-css3" aria-hidden="true"></i></h3>
				<h4 class="title">CSS3</h4>
				<p class="desc-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam urna leo, finibus eu pulvinar eget, semper in tortor. Duis bibendum sem at nulla malesuada, et fermentum libero interdum. Pellentesque suscipit nibh non metus molestie, auctor molestie est cursus. Nulla a rhoncus augue, quis bibendum mi. Vivamus porta vel dolor a ornare. Maecenas bibendum lobortis interdum. Nullam congue augue non risus iaculis euismod. Nullam ultrices elit ut nulla tempor, id semper sapien malesuada. Aenean cursus vulputate mi ac fringilla.</p>
			</div><!--box-especialidade-->

			<div class="box-especialidade">
				<h3 class="icons"><i class="fa fa-html5" aria-hidden="true"></i></h3>
				<h4 class="title">HTML 5</h4>
				<p class="desc-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam urna leo, finibus eu pulvinar eget, semper in tortor. Duis bibendum sem at nulla malesuada, et fermentum libero interdum. Pellentesque suscipit nibh non metus molestie, auctor molestie est cursus. Nulla a rhoncus augue, quis bibendum mi. Vivamus porta vel dolor a ornare. Maecenas bibendum lobortis interdum. Nullam congue augue non risus iaculis euismod. Nullam ultrices elit ut nulla tempor, id semper sapien malesuada. Aenean cursus vulputate mi ac fringilla.</p>
			</div><!--box-especialidade-->

			<div class="box-especialidade">
				<h3 class="icons"><i class="fa fa-gg" aria-hidden="true"></i></h3>
				<h4  class="title">Javascript</h4>
				<p class="desc-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam urna leo, finibus eu pulvinar eget, semper in tortor. Duis bibendum sem at nulla malesuada, et fermentum libero interdum. Pellentesque suscipit nibh non metus molestie, auctor molestie est cursus. Nulla a rhoncus augue, quis bibendum mi. Vivamus porta vel dolor a ornare. Maecenas bibendum lobortis interdum. Nullam congue augue non risus iaculis euismod. Nullam ultrices elit ut nulla tempor, id semper sapien malesuada. Aenean cursus vulputate mi ac fringilla.</p>
			</div><!--box-especialidade-->
		</div>
	</section>

	<section class="extras">
		<div class="center depoimentos">
			<div class="depoimentos-container">
				<h2 class="h2-depoimentos">Depoimentos dos nossos clientes</h2>
				
				<div class="depoimento-single">
				<p class="nome-autor">Lorem ipsum</p>
					<p class="depoimento-descricao">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</p>
					<hr>
					<br>
					<p class="nome-autor">Lorem ipsum</p>
					<p class="depoimento-descricao"> Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<hr>
					<br>
					<p class="nome-autor">Lorem ipsum</p>
					<p class="depoimento-descricao"> Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div><!--depoimento-single-->
			</div>

			<div id="servicos" class="w50 left servicos-container">
				<h2 class="h2-servicos">Serviços</h2>
				<div class="servicos">
					<ul>
						<li class="li-servicos">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li class="li-servicos">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li class="li-servicos">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li class="li-servicos">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li class="li-servicos">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li class="li-servicos">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li class="li-servicos">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
						<li class="li-servicos">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
					</ul>
				</div><!--servicos-->
			</div><!--w50-->
		</div><!--center-->
	</section><!--extras-->

	<footer>
		<div class="center">
			<p class="p-footer"> Isaac de Oliveira - Todos os direitos reservados!</p>
		</div>
	</footer>

	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
</body>
</html>