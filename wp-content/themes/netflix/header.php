<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Netflix</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ) ?>/css/vendor/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ) ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ) ?>" />
	<?php wp_head(); ?>
</head>


<body>

<header id="net-header">
	<div class="container-fluid">
		<div class="row-flex">
			<div class="col-2">
				<div class="logo">
					<a class="logo-img" href="http://localhost/netflix/">
						<img src="<?php bloginfo( 'template_url') ?>/img/netflix-logo.png" class="embed-responsive">
					</a>
				</div>
			</div>
			<div class="col-4">
				<div class="net-menu-container">
					<div class="net-menu-content">
						<ul class="net-menu-items">
							<li class="net-menu-item">
								<a class="net-menu-link" href="">Início</a>
							</li>
							<li class="net-menu-item">
								<a class="net-menu-link" href="">Séries</a>
							</li>
							<li class="net-menu-item">
								<a class="net-menu-link" href="">Filmes</a>
							</li>
							<li class="net-menu-item">
								<a class="net-menu-link" href="">Novidades</a>
							</li>
							<li class="net-menu-item">
								<a class="net-menu-link" href="">Minha Lista</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>