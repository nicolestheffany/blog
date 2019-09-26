<!DOCTYPE html>
<html lang='pt-br'>
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
		<!-- JQuery and Popper.js -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<!-- Bootstrap JavaScript -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">

		<!-- Ícone da página -->
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo base_url();?>assets/img/favicon.ico" type="image/x-icon">

		<!-- Fonte da página -->
		<link href="https://fonts.googleapis.com/css?family=DM+Serif+Text:400i|Lato&display=swap" rel="stylesheet">

		<title><?php echo $titulo; ?></title>
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light py-3 px-5" style="background-color: white;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
				<span class="navbar-toggler-icon"></span>
			</button>

			<a class="navbar-brand font-serif ml-auto" href="http://localhost/blog/home/index">
				<img src="<?php echo base_url(); ?>assets/img/icon.png" width="30" height="30" class="d-inline-block align-top" alt="Ícone do blog">
					My Blog
			</a>
	
			<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item text-uppercase <?php echo $pagina == 'Home' ? 'active' : ' '?> ">
						<a class="nav-link" href="<?php echo base_url(); ?>home/index">Home</a>
					</li>
					<li class="nav-item text-uppercase <?php echo $pagina == 'Posts' ? 'active' : ' '?>">
						<a class="nav-link" href="<?php echo base_url(); ?>posts/todososposts">Posts</a>
					</li>
					<li class="nav-item text-uppercase <?php echo $pagina == 'Categorias' ? 'active' : ' '?> ">
						<a class="nav-link" href="#">Categorias</a>
					</li>
				</ul>
			</div>
			
			<?php foreach ($usuario as $user) { ?>
			<div class="nav-item dropdown justify-content-end ml-auto">
				<a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img src="<?php echo base_url(); ?>assets/img/<?php echo $user->img; ?>" width="30" height="30" class="d-inline-block align-top rounded-circle">
				</a>
				<div class="dropdown-menu dropdown-menu-right rounded-0" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="#">Meu perfil</a>
					<a class="dropdown-item" href="#">Sair</a>
				</div>
			</div>
			<?php } ?>
		</nav>

